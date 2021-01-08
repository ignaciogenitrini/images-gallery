<?php
include 'funciones.php';

$connect = connection();

if (!$connect) {
    header('Location: index.php');
}

$fotos_por_pagina = 8;

$paginaactual  = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;

$inicio = ($paginaactual > 1) ? $paginaactual * $fotos_por_pagina - $fotos_por_pagina : 0;

$statements = $connect->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina");
$statements->execute();

$fotos = $statements->fetchAll();

if (!$fotos) {
    // Como buena practica se redireciona al usuario hacia una pagina con un error
    header('Location: index.php');
}

$statements = $connect->prepare("SELECT FOUND_ROWS() as total_filas");
$statements->execute();

$totalFilas = $statements->fetch()['total_filas'];

$totalPaginas = ceil($totalFilas / $fotos_por_pagina);

include 'views/index.view.php';
