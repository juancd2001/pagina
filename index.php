<?php  
session_start();
if (isset($_SESSION['userr'])){
$username = $_SESSION['userr'];
}
?>
<!DOCTYPE>
<html lang="es">
<head>
	
	<meta name="viewport" content="width-device-widht, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minumun-scale=1.0">
	<meta charset="utf-8">
	<title>Rodentia</title>
	<link rel="stylesheet" href="jquery.fsscroll.css">
	<script src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
        integrity="sha384-7WBfQYubrFpye+dGHEeA3fHaTy/wpTFhxdjxqvK04e4orV3z+X4XC4qOX3qnkVC6"
        crossorigin="anonymous">
</script>
<script src="jquery.fsscroll.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link rel="stylesheet" media="screen and (max-height: 600px)" href="estilos/tel.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<table>
		<tr>
		<td> <a style="text-decoration: none; color: #000000" href="index.php"><h1 style="margin-left: 20px; padding-top: .7em; max-height: 10px;">Rodentia</h1></a></td>
		</tr>
		<tr class="tam">
		<td>

<?php  
if (!isset($_SESSION['userr'])){
echo '<nav class="nav2">
				<ul>
		<li> <a class="boton_personalizado" href="login.php">Iniciar Sesion</a></li>
		<li> <a class="boton_personalizado" href="registro.php">Registrarse</a></li>
		</ul>
		</nav>';}

		else{
			echo '<nav class="nav2">
				<ul>
		<li> <a class="boton_personalizado" href="cerrar.php">Cerrar Sesion</a></li>
		</ul>
		</nav>';
		}

?>

			
		</td>
	</tr>
		</table>
		<nav style="margin-top: -1em;">
			<ul>
				<li> <a class="boton_personalizado2" href="helpunu.php">ALIMENTO</a></li>
				<li> <a class="boton_personalizado2" href="helpunu.php">ASEO</a></li>
				<li> <a class="boton_personalizado2" href="helpunu.php">HABITATS</a></li>
				<li> <a  class="boton_personalizado2" href="helpunu.php">JUGUETES</a></li>
			</ul>
		</nav>
	</header>
	<div class="noc">
		<a href="#"><img src="imagenes/1.jpg" class=imgxd> </a>
	</div>
<?php 
	if (!isset($_SESSION['userr'])){
	echo '<section class="titulo">
		<p class="sub"> <b>PRODUCTOS DESTACADOS</b></p>
	</section>';
}
else {
	echo '<section class="titulo">
		<p class="sub"> <b>¡Hola '.$username.' mira nuestos productos destacados! :)</b></p>
	</section>';
}
?>

	<table class="yoxd">
		<tr>
			<td>
	<div class="productos">
		<img class="zoom" src="imagenes/p1.jpg">
		<p class="tilpro"><b>Tunel de heno</b></p>
		<p class="subpro"><b>$50</b></p>
	</div>
	</td>

	<td>
	<div class="productos">
		<img class="zoom" src="imagenes/p2.jpg">
		<p class="tilpro"><b>Comida para Hamsters</b></p>
		<p class="subpro"><b>$100</b></p>
	</div>
</td>

<td>
	<div class="productos">
		<img class="zoom" src="imagenes/p3.jpg">
		<p class="tilpro"><b>Jaula</b></p>
		<p class="subpro"><b>$300</b></p>
	</div>
	</td>
<td>
	<div class="productos">
		<img class="zoom" src="imagenes/p4.jpg">
		<p class="tilpro"><b>Heno</b></p>
		<p class="subpro"><b>$100</b></p>
	</div>
	</td>
	</tr>
</table>






<table class="yoxd2">
<tr>
			<td>
	<div class="productos">
		<img class="zoom" src="imagenes/p1.jpg">
		<p class="tilpro"><b>Tunel de heno</b></p>
		<p class="subpro"><b>$50</b></p>
	</div>
	</td>
</tr>

<tr>
	<td>
	<div class="productos">
		<img class="zoom" src="imagenes/p2.jpg">
		<p class="tilpro"><b>Comida para Hamsters</b></p>
		<p class="subpro"><b>$100</b></p>
	</div>
</td>
</tr>

<tr>
<td>
	<div class="productos">
		<img class="zoom" src="imagenes/p3.jpg">
		<p class="tilpro"><b>Jaula</b></p>
		<p class="subpro"><b>$300</b></p>
	</div>
	</td>
	</tr>
	<tr>
<td>
	<div class="productos">
		<img class="zoom" src="imagenes/p4.jpg">
		<p class="tilpro"><b>Heno</b></p>
		<p class="subpro"><b>$100</b></p>
	</div>
	</td>
	</tr>
</table>









	<footer >
		<h3>Redes sociales:</h3>
		<a style="text-decoration: none;" href="https://www.facebook.com/">
		<img src="imagenes/fb.png" width="40px" height="40px">
		</a>
		<a style="text-decoration: none;" href="https://twitter.com/">
		<img src="imagenes/tw.png" width="40px" height="40px">
		</a>
		<a style="text-decoration: none;" href="https://www.instagram.com/?hl=es-la">
		<img src="imagenes/ins.png" width="40px" height="40px">
		</a>

	</footer>
<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});

</script>

</body>
</html>