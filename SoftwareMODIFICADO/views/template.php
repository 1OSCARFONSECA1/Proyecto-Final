<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vicerrectoria - Universidad de Boyacá</title>
	<!-- styles -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="views/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="views/css/styles.css">
</head>
<body>
	<?php include "modules/navegacion.php"; ?>
	<section>
		<?php 
		$mvc = new MvcController();
		$mvc -> enlacesPaginasController();
		 ?>
	</section>
	<?php include "modules/footer.php"; ?>
	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="views/js/site.js"></script>
</body>
</html>