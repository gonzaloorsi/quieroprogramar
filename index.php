<!doctype html>
<html>
<head>
	<title>Quiero Programar | Cualquiera puede aprender</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script>
		$(document).ready(function () {
		$(".p1").fadeOut(0);
		$("#box1").hover(function(){$(".p1").fadeIn();});
		

		$(".p2").fadeOut(0);
		$("#box2").hover(function(){$(".p2").fadeIn();});

		$(".p3").fadeOut(0);
		$("#box3").hover(function(){$(".p3").fadeIn();});

		});
	</script>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<ul>
				<li><a href="#"><img src="img/logo.png"></a></li>
				<li><a href="#">QUIENES SOMOS</a></li>
				<li><a href="#">COMO FUNCIONA</a></li>
				<li><a href="#">QUIENES APOYAN</a></li>
				<li><a href="#">CONTACTO</a></li>
				<li><a href="#"><img src="img/social-twitter-box-blue-icon.png"></a></li>
				<li><a href="#"><img src="img/social-facebook-box-blue-icon.png"></a></li>
			</ul>

		</div>
	</div>

	<div id="main">

		<div id="box1">
			<h1>QUIERO<br/>ENSEÑAR</h1>
			<p class="p1">Encontrá donde poder enseñarle a otras personas</p>
		</div>

		<div id="box2">
			<h1>QUIERO<br/>APRENDER</h1>
			<p class="p2">Encontrá donde aprender</p>
		</div>

		<div id="box3">
			<h1>QUIERO CARGAR<br/>MI CENTRO</h1>
			<p class="p3">Cargá tu lugar al mapa y recibí alumnos y profesores </p>
		</div>


	</div>



</body>
</html>