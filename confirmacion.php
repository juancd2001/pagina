<meta charset="utf-8">
<?php 
if(isset($_POST['nom'])){
	$nom = $_POST ["nom"];
	$ape = $_POST ["ape"];
	$user = $_POST ["user"];
	$cor = $_POST ["cor"];
	$tel = $_POST ["tel"];
	$pass = $_POST ["pass"];
	$pass2 = $_POST["pass2"];

	if ($pass == $pass2){
	$conexion = mysqli_connect("localhost", "rodentia", "4ffd86a8e") or die("Fallo al conectar unu");
	mysqli_select_db ($conexion, "rodentia") or die("No existe esa cosa alch");

	$res = mysqli_query ($conexion,"INSERT INTO `Usuario` (`nombre`, `apellidos`, `user`, `correo`, `tel`, `pass`) VALUES ('$nom', '$ape', '$user', '$cor', '$tel', '$pass');");
	if ($res==true){
		echo "Usuario registrado... redireccionando";
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=index.php">';
	} else {
		echo "Usuario no registrado unu";
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=index.php">';
	}
}
else {
	echo '<p style ="font-size:40px;">Las contraseñas no son iguales unu</p>';
	echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=registro.php">';
}
}
else{
	echo '<p style ="font-size:40px;">Te atrape esponja</p>';
}

 ?>