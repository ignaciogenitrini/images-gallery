<!DOCTYPE html>
<html>
<head>
	<title>Galeria</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minumum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="C:\xampp\htdocs\cursophp\practicas\galeria\font-awesome-4.7.0\font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

<header>
	<div class="contenedor">
		<h1 class="titulo">Titulo:
	<?php if (!empty($foto['titulo'])) {
    echo $foto['titulo'];
} else {
    echo $foto['imagen'];
}
?>
</h1>
	</div>
</header>

<div class="contendor">
	<div class="foto">
		<img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
		<p class="texto"><?php echo $foto['texto']; ?></p>
		<a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresear</a>
	</div>
</div>


<footer>
	<p class="copyright">Galeria creada por Ignacio Genitrini</p>
</footer>

</body>
</html>
