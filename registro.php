<!DOCTYPE>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<meta name="viewport" content="width-device-widht, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minumun-scale=1.0">
	<link rel="stylesheet" media="screen and (max-height: 600px)" href="estilos/tel.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilos/registro.css">
</head>
<body>
<header>
		<table>
		<tr>
		<td> <a style="text-decoration: none; color: #000000" href="index.php"><h1 style="margin-left: 20px; padding-top: .7em; max-height: 10px;">Rodentia</h1></a></td>
		</tr>
		<tr>
		<td>
			<nav class="nav2">
				<ul>
		<li> <a class="boton_personalizado" href="login.php">Iniciar Sesion</a></li>
		<li> <a class="boton_personalizado" href="registro.php">Registrarse</a></li>
		</ul>
		</nav>
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
	<div style="margin-top: 7em;">
		<h2 style="text-align: center;">Registrate (Todos los campos son obligatorios)</h2>
		<form action="confirmacion.php" method="post" style="text-align: center;">
		<input class="cajas" type="text" name="nom" placeholder="Nombre(s)" required>
		<br>
		<br>
		<input class="cajas" type="text" name="ape" placeholder="Apellidos" required>
		<br>
		<br>
		<input class="cajas" type="text" name="user" placeholder="Usuario" required>
		<br>
		<br>
		<input class="cajas" type="email" name="cor" placeholder="Correo Electronico" required>
		<br>
		<br>
		<input class="cajas" type="number" name="tel" placeholder="Telefono">
		<br>
		<br>
		<input class="cajas" type="password" name="pass" placeholder="Contraseña" required minlength="5">
		<br>
		<br>
		<input class="cajas" type="password" name="pass2" placeholder="Confirmar Contraseña" required minlength="5">
		<br>
		<br>
		<input class="boton" type="submit" value="Registrar">
		</form>
	</div>
</body>
</html>