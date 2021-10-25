<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/stylecontacto.css">
    <title>Contacto</title>
</head>
<body>
    
<div id="linea"></div>
	<div id="header">
		<div id="centro1">
			<div id="logo">
				<h2>Tienda Online</h2><br>
				<!-- <p>Los mejores productos para tu PC</p> -->
			</div>
			<div id="menu"> 
				<ul>
					<li><a href="admin.php">Inicio</a></li>
					<li><a href="nosotros.html">Nosotros</a></li>
					<li><a href="servicios.html">Servicios</a></li>
					<li><a href="clientes.html">Clientes</a></li>
					<li><a href="contacto.html">Contacto</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div id="contenidos-paginas">
		<div id="centro3">
			<h2>
				<em class="encabezados t1">Contacta con</em> 
				<em class="encabezados t2">Nosotros</em>
			</h2>
			<p class="descripcion-pagina">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
			</p>
			<hr>

			<div id="contenido-nosotros">
				
				<div id="izquierda">
					<p class="descripcion-pagina texto-contacto">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.<br>
						Telélefono: <strong>973 111 222</strong><br>
						Celular: <strong>654 321 987</strong><br>
						Email: <strong><a href="mailto: juanventura200@gmail.com" class="email-contacto">f@gmail.com</a></strong>
					</p>
				</div>	


				<div id="derecha">
					<form action="#" method="POST">
						<input type="text" name="nombre" placeholder="Nombre completo" class="nombre-mensaje">
						<br>
						<input type="email" name="correo" placeholder="Email" class="email-asunto">

						<input type="text" name="asunto" placeholder="Asunto" class="email-asunto"><br>

						<textarea name="mensaje" placeholder="Cuentanos más " class="nombre-mensaje"></textarea><br>

						<input type="submit" name="enviar" value="Enviar consulta">
					</form>
				</div>

				<div id="mapa">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3880.205886558182!2d-88.16743098199365!3d13.461402473858934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x72953df7e0502a9b!2sMetrocentro+San+Miguel!5e0!3m2!1ses-419!2ssv!4v1564899753613!5m2!1ses-419!2ssv" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				

			</div>

			
		</div>
	</div>

	<div id="pie">
		<div id="centro-pie">
			<p>
                © Todos los derechos reservados - 
				Diseñado por Ferran Latorre</a> - 2021
			</p>
		</div>
	</div>



</body>
</html>