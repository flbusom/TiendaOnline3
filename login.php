<?php

// archiu confiduracio
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty($_POST["username"])){
        $username_err = "Debe escribir su email.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty($_POST["password"])){
        $password_err = "Es necesario un password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password,token FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $db_password,$usertoken);
                    if(mysqli_stmt_fetch($stmt)){
                        //echo $id. $username. $db_password;
                        if($password == base64_decode($db_password)){
                            $caducidad = $year = 60 * 60 * 24 * 365 + time();
                            setcookie('userCookie', $id, $caducidad,'/' );
                            setcookie('userToken', $usertoken, $caducidad,'/' );

                            // redireccioanr
                            header("location: index.php");
                        }else{
                            
                            $password_err = "El password no es válido.";
                        }
                    }
                } else{
                    // 
                    $username_err = "No existe este usuario.";
                }
            } else{
                echo "Ha habido un error, inténtelo más tarde.";
            }
        }
        
        
        mysqli_stmt_close($stmt);
    }
    
    //cerrar conexion
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>

    <div class="wrapper">
        <h2>Iniciar Sesión</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Contraseña</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Iniciar Sesión">
            </div>
            <p>No tienes una cuenta? <a href="register.php">Registrarse</a>.</p>
        </form>

    </div> 

</body>
</html>