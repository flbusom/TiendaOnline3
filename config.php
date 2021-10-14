<?php



define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'usbw');
define('DB_NAME', 'registerlogin');


$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Ccomprobar conexio
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

function conectar() {
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




