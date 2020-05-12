<!DOCTYPE html>
<html class="h-100" lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php
	if(!isset($titulo) || empty($titulo)){
		$titulo = 'Sexy Love';
	}
		echo "<title>$titulo</title>";
	?>
	<link rel="icon" href="<?php echo RUTA_ICONO?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/0f1db072b6.js" crossorigin="anonymous"></script>
	<link href="<?php echo  RUTA_CSS ?>bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo  RUTA_CSS ?>estilos.css" rel="stylesheet">
	<script src="<?php echo RUTA_JS ?>prefix.js"></script>
</head>
<body class="h-100">
