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
		<h1 class="titulo">Galeria realizada con PHP Y MYSQL!</h1>
	</div>
</header>

<section class="fotos">
	<div class="contenedor">
	<?php foreach ($fotos as $foto): ?>
		<div class="thumb">
			<a href="foto.php?id=<?php echo $foto['id']; ?>">
			<img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
			</a>
		</div>
	<?php endforeach?>
	</div>

		<div clas="paginacion">
			<?php if ($paginaactual > 1): ?>
			<a href="index.php?pagina=<?php echo $paginaactual - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
			<?php endif?>

			<?php if ($totalPaginas != $paginaactual): ?>
			<a href="index.php?pagina=<?php echo $paginaactual + 1; ?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
			<?php endif?>

			<!--
			<a href="#" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
			<a href="#" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
			-->
		</div>
</section>

<footer>
	<p class="copyright">Galeria creada por Ignacio Genitrini</p>
</footer>

</body>
</html>
