<?php  
session_start();
if(isset($_POST['user'])){
	$user = $_POST ["user"];
	$pass = $_POST ["pass"];

	$conexion = mysqli_connect("localhost", "rodentia", "4ffd86a8e") or die("Fallo al conectar unu");
	mysqli_select_db ($conexion, "rodentia") or die("No existe esa cosa alch");

	$res = mysqli_query ($conexion,"SELECT * FROM `Usuario` WHERE user = '$user' AND pass = '$pass'");
	$num = mysqli_num_rows ($res);
	if ($num>0){
	echo "Ha iniciado sesion UwU";
	
	$_SESSION['userr'] = $user;
	$_SESSION['passs'] = $pass;
	
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=index.php">';
	} else {
		echo '<p style ="font-size:40px;">Usuario no existente u.u</p>';
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=login.php">';
	}
}
else{
	echo '<p style ="font-size:40px;">Te atrape esponja</p>';
}

?>