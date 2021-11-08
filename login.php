<?php

//archiu configuracio
require_once "config.php";


$username = $password = "";
$username_err = $password_err = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){

    // si el usuario esta vacio
    if(empty($_POST["username"])){
        $username_err = "Debe escribir su email.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // si la contraseña esta vacia
    if(empty($_POST["password"])){
        $password_err = "Es necesario una contraseña.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // validar
    if(empty($username_err) && empty($password_err)){
        

       /*  //validar usuario admin
        $sql = "SELECT * FROM users WHERE username = '$username' AND token = '4d3279125ada'";
        
        if($stmt = mysqli_prepare($link, $sql)){
           
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // parametros
            $param_username = $username;
            
            
            if(mysqli_stmt_execute($stmt)){
                // resultado
                mysqli_stmt_store_result($stmt);
                
               
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                   
                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $db_password,$usertoken);
                    if(mysqli_stmt_fetch($stmt)){
                        
                        if($password == base64_decode($db_password)){
                            $caducidad = $year = 60 * 60 * 24 * 365 + time();
                            setcookie('userCookie', $id, $caducidad,'/' );
                            setcookie('userToken', $usertoken, $caducidad,'/' );

                            // redireccioanar
                            header("location: user.php");
                        }
                        else{
                            
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
 */


        
        //validar user normal
        $sql = "SELECT id, username, password,token FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
           
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // parametros
            $param_username = $username;
            
            
            if(mysqli_stmt_execute($stmt)){
                // resultado
                mysqli_stmt_store_result($stmt);
                
               
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                   
                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $db_password,$usertoken);
                    if(mysqli_stmt_fetch($stmt)){
                        
                        if($password == base64_decode($db_password)){
                            $caducidad = $year = 60 * 60 * 24 * 365 + time();
                            setcookie('userCookie', $id, $caducidad,'/' );
                            setcookie('userToken', $usertoken, $caducidad,'/' );

                            // redireccioanar
                            header("location: index.php");
                        }
                        else{
                            
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

    }//cierre if
    
    //cerrar conexion
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">-->
 
    <link rel="stylesheet" type="text/css" href="bootstrap.css"> 
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
                <input type="" name="password" class="form-control">
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