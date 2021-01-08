<?php
require 'funciones.php';

$connect = connection();

if (!$connect) {
    die();
}

$id = isset($_GET['id']) ? (int) $_GET['id'] : false;

if (!$id) {
    header('Location: index.php');
}

$statements = $connect->prepare('SELECT * FROM fotos WHERE id = :id');
$statements->execute(array(':id' => $id));

$foto = $statements->fetch();

if (!$foto) {
    header('Location: index.php');
}

require 'views/foto.view.php';
