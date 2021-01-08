<?php
require 'funciones.php';

$connect = connection();

if (!$connect) {
    // Acá iria la redirección a una pagina donde muestre el error
    die();
}

/* $_FILES : Devuelve un array con los datos del archivo subido, ejemplo:

Array
(
[foto] => Array
(
[name] => 1.jpg
[type] => image/jpeg
[tmp_name] => C:\xampp\tmp\phpD51F.tmp
[error] => 0
[size] => 88641
)

)
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {

    $check = @getimagesize($_FILES[foto][tmp_name]);
    // @ getimagesize devuelve propiedades de una imagen o false si el archivo no es una imagen
    // Se agrega @ para evitar el error NOTICE

    if ($check !== false) {
        $carpeta_destino = 'fotos/';
        $archivo_subido  = $carpeta_destino . $_FILES['foto']['name'];
        // echo $archivo_subido; carpeta / nombre del archivo

        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

        $statements = $connect->prepare('INSERT INTO fotos(titulo, imagen, texto) VALUES (:titulo, :imagen, :texto)');

        $statements->execute(array(
            ':titulo' => $_POST['titulo'],
            ':imagen' => $_FILES['foto']['name'],
            ':texto'  => $_POST['texto'],
        ));

        //header('Location: index.php');
    } else {
        $error = 'El archivo que intentas subir es incorrecto';
    }
}

require 'views/subir.view.php';
