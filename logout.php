<?php

//inicializamos la sesion
session_start();
 
//Desarmar todas las variables de sesión
$_SESSION = array();
 
//cerrar la sesion
session_destroy();

//borramos las cookies();
setcookie("userCookie","", time() - 3600, "/");
setcookie("userToken", "", time() - 3600, "/");
 
//redireccionar a la pagina inicio de sesion
header("location: login.php");
exit;

?>