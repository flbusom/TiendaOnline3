<?php


/* conexio base de datos */ /* cambiar $link  a $connect */
$link = mysqli_connect('localhost', 'root', 'usbw', 'registerlogin');

// Comprobar conexion
if($link === false){
	die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}

//funcion conectar base de datos
function conectar() {
	//parametros
	$server = "localhost";
	$user = "root";
	$password = "usbw";
	$db = "registerlogin";

	try {
		$conn = new PDO("mysql:host=$server;dbname=$db", $user, $password, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
	} catch (Exception $ex) {
		echo $ex->getMessage();
	}
}




