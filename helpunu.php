<?php  
session_start();
if (isset($_SESSION['userr'])){
$username = $_SESSION['userr'];
}
?>
<!DOCTYPE>
<html lang="es">
<head>
	<title>Dificultades tecnicas</title>

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
		<tr>

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
	<div style="text-align: center; margin-top: 10em;">
		<p class="sub"> <b>Nuestros mejores programadores procrastinan arduamente</b></p>
		<img src="imagenes/xd.jpg">
		<p class="sub"> <b>Mientras puedes observar estos videos relacionados a la tematica de la pagina uwu</b></p>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/nAObde5bcAM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		<iframe width="560" height="315" src="https://www.youtube.com/embed/XMxhnZaPyQo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</body>
</html>