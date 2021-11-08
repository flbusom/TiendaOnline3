<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/stylecontacto.css">
    <title>Perfil | SoluTec</title>
</head>
<body>

    <!-- <header>

        <?php
            include('')

        ?>
    </header> -->
    
<div id="linea"></div>

	<div id="header">
		<div id="centro1">
			<div id="logo">
				
				<h2><a href="user.php"><img src="/img/logo.png" width="100" height="100" alt=""></a></h2>
				
			</div>
			<div id="menu"> 
				<ul>
					<li><a href="admin.php">Inicio</a></li>
					<li><a href="servicios.html">Productos</a></li>
					<li><a href="nosotros.php">Nosotros</a></li>
					<li><a href="contacto.php">Contacto</a></li>
					<li><a href="perfilusuario.php">Perfil</a></li>
					<li><a href="logout.php">Cerrar Sesión</a></li>
				</ul>
			</div>
		</div>
	</div>


	<div id="contenidos-paginas">
		<div id="centro3">
                <h2>
                    <em class="encabezados t1">Perfil</em> 
                    <em class="encabezados t2">Usuario</em>
                </h2>	
		</div>
	</div>


    <div align="center">

        <div class="row">
            <div class="col-md-6">
                <form action="">
                    <?php
                        $sqp = "SELECT * FROM users WHERE"
                    ?>
                    <div class="form-group">

                        <input type="text" name="updateUsername" class="form-control" value="">
                    </div>

                    <div class="form-group">

                        <input type="email" name="userEmail" class="form-control" value="Email">
                    </div>

                    <div class="form-group">
                        
                        <input type="file" name="userImage" class="form-control">
                    </div>

                    <div class="form-group">

                        <input type="submit" name="update" class="form-control" value="Actualizar">
                    </div>

                </form>
            </div>
        </div>
    </div>




	<div id="pie">
		<div id="centro-pie">
			<p>
                © Todos los derechos reservados - 
				Diseñado por SoluTec</a> - 2021
			</p>
		</div>
	</div>



</body>
</html>