<?php
require_once "config.php";
require_once "functions.php";


// Check if the user is logged in, if not then redirect him to login page
if(!isset($_COOKIE["userCookie"]) && (!isset($_COOKIE["userToken"]))){
   header("location: login.php");
    exit;
    echo $_COOKIE["userCookie"];die();
}
    $user_id = $_COOKIE["userCookie"];
    $token = $_COOKIE["userToken"];
    //-----si manipulan cookies, las borramos y redireccionamos a login-----------
//comprobarToken($user_id, $token);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap431/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>


<header >
    <div class="header_left">
       <h1><b><?php echo htmlspecialchars($user_id); ?></b></h1>   
   </div>
   <div class="header_right">
    <h1><b><?php echo htmlspecialchars($user_id); ?></b></h1>
</div>

</header>
<body>

    <p>
      
        <a href="logout.php" class="btn btn-danger">Cerrar sesión en su cuenta</a>
    </p>



</body>
</html>