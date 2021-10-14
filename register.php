<?php


require_once "config.php";


$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){

    // validar usuario
    if(empty($_POST["username"])){
        $username_err = "Please enter a email.";
    } else{
        // Preparar a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // parametros
            $param_username = trim($_POST["username"]);
            
          
            if(mysqli_stmt_execute($stmt)){
               
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        
        mysqli_stmt_close($stmt);
    } 
    
    // validar contraseña
    if(empty($_POST["password"])){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // validar confirmar contraseña
    if(empty($_POST["confirm_password"])){
        $confirm_password_err = "Confirme la contraseña.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "La contraseña no coincidió.";
        }
    }
    
   
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        
        $sql = "INSERT INTO users (username, password, token) VALUES (?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_token);
            
            // parametros
            $param_username = $username;
            $param_token = bin2hex(openssl_random_pseudo_bytes(6));
           

            
            $param_password =  base64_encode($password);
            
            
            if(mysqli_stmt_execute($stmt)){
                
                header("location: login.php");exit();

            } else{
                echo "Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
            }
        }

       
        mysqli_stmt_close($stmt);
    }
    
    
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
    <div class="wrapper">
        <h2>Registrarse</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Contraseña</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirmar Contraseña</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enviar">
                
            </div>
            <p>¿Ya tienes una cuenta? <a href="login.php">Entre aquí</a>.</p>
        </form>
    </div>  


</body>
</html>