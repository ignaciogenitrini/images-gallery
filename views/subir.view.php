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
		<h1 class="titulo">Subir fotos</h1>
	</div>
</header>

<div class="contendor">
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario" enctype="multipart/form-data">
	<label for="foto">Selecciona tu foto</label>
	<input type="file" name="foto" id="foto">

	<label for="titulo">Titulo de la foto</label>
	<input type="text" name="titulo" id="titulo">

	<label for="texto">Descripcion de la imagen</label>
	<textarea id="texto" name="texto" placeholder="Ingrese una descripcion"></textarea>

	<?php if (isset($error)): ?>
	<p class="error"><?php echo $error; ?></p>
	<?php endif?>

	<input type="submit" class="submit" value="Subir foto">

	</form>
</div>


<footer>
	<p class="copyright">Galeria creada por Ignacio Genitrini</p>
</footer>

</body>
</html>
