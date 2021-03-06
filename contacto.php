<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/stylecontacto.css">
    <title>Contacto | SoluTec</title>
</head>
<body>
    
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
				<em class="encabezados t1">Contacta con</em> 
				<em class="encabezados t2">SoluTec</em>
			</h2>
			<p class="descripcion-pagina">
				SoluTec es tu empresa de confianza, con todo el soporte informatico para clientes particulares y empresas. 
				También esncontraras los mejores productos al mejor precio.
			</p>
			<hr>

			<div id="contenido-nosotros">
				
				<div id="izquierda">
					<p class="descripcion-pagina texto-contacto">
						Para contactar con nosotros puede mediante telefono fijo, movil o email.
						cualquier duda que tengas no dudes en contactar con nosotros.
						<br>
						Teléfono: <strong>973 111 222</strong><br>
						Movil: <strong>654 321 987</strong><br>
						Email: <strong><a href="mailto: juanventura200@gmail.com" class="email-contacto">f@gmail.com</a></strong>
					</p>
				</div>	


				<div id="derecha">
					<form action="#" method="POST">
						<input type="text" name="nombre" placeholder="Nombre completo" class="nombre-mensaje">
						<br>
						<input type="email" name="correo" placeholder="Email" class="email-asunto">

						<input type="text" name="asunto" placeholder="Asunto" class="email-asunto"><br>

						<textarea name="mensaje" placeholder="Cuentanos más..." class="nombre-mensaje"></textarea><br>

						<input type="submit" name="enviar" value="Enviar consulta">
					</form>
				</div>

				<div id="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7532.184389878265!2d0.6027061280369955!3d41.57335924331669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a6df8ec753a553%3A0x724c889aa803a9cd!2zMjUxNzEgQWxiYXTDoHJyZWMsIEzDqXJpZGE!5e1!3m2!1ses!2ses!4v1635182247992!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>				

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