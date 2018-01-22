<!DOCTYPE HTML>
<!--
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Datos personales</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html">Homepage</a></li>
						<li class="active"><a href="left-sidebar.html">Formulario de Contacto</a></li>
						</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">PERFIL PROFESIONAL</a></h1>
					<span class="tag">Por Hivaney Valencia</span>
				</div>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- Sidebar -->
					<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>Hivaney Valencia </h2>
							</header>
							<div class="row">
								<section class="6u">
									<ul class="default">
										<li><a href="#">Cosas importantes</a></li>
										<li><a href="#">Cosas importantes</a></li>
										<li><a href="#">Cosas importantes</a></li>
										<li><a href="#">Cosas importantes</a></li>
										<li><a href="#">Cosas importantes</a></li>
									</ul>
								</section>
								<section class="6u">
									<ul class="default">
										<li><a href="#">Cosas importantes</a></li>
										<li><a href="#">Cosas importantes</a></li>
										<li><a href="#">Cosas importantes</a></li>
										<li><a href="#">Cosas importantes</a></li>
										<li><a href="#">Cosas importantes</a></li>
									</ul>
								</section>
							</div>
						</section>
						<section>
							<header>
								<h2>Noticias Importantes</h2>
							</header>
							<ul class="style">
								<li>
									<p class="posted">May 21, 2014  |  (10 )  Comments</p>
									<p><a href="#"></a></p>
								</li>
								<li>
									<p class="posted">May 18, 2014  |  (10 )  Comments</p>
									<p><a href="#"></a></p>
								</li>
							</ul>
						</section>
					</div>
					
					<!-- Content -->
					<!-- Content -->
<?php

$time = time();

echo "".time();

date_default_timezone_set("America/Bogota");
echo "La fecha en la que se recibio este formulario es ".date("d-m-Y ([H:i:s])", $time);

echo "<br>";
 
if(isset($_POST["nombre"]) && strlen($_POST["nombre"])>0)
{
 
	 echo "Se ha recibido correctamente el nombre de: ".$_POST["nombre"];

}elseif(isset($_POST["nombre"])){

	// Lo normal es indicar que hay un error
 
	echo "El nombre no puede estar vacio";
}

echo "<br>";

if(isset($_POST["primer_apellido"]) && strlen($_POST["primer_apellido"])>0)
{
 
	 echo "Se ha recibido correctamente el primer apellido es: ".$_POST["primer_apellido"];

}elseif(isset($_POST["nombre"])){

	// Lo normal es indicar que hay un error
 
	echo "El primer apellido no puede estar vacio";
}

echo "<br>";

if(isset($_POST["segundo_apellido"]) && strlen($_POST["segundo_apellido"])>0)
{
 
	 echo "Se ha recibido correctamente el segundo apellido es: ".$_POST["segundo_apellido"];

}elseif(isset($_POST["nombre"])){

	// Lo normal es indicar que hay un error
 
	echo "El segundo apellido no puede estar vacio";
}

echo "<br>";

if(is_numeric($_POST['telefono'])||preg_match('/^(?=.*[0-9])[0-9 -]+$/i', $_POST['telefono'])) {
	 echo "el numero de telefono es ".$_POST['telefono'];
} else {
	 echo "El campo Telefonico no puede quedar vacio"; 
		}

echo "<br>";
   

function comprobar_email($email) {
    return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? 1 : 0;
}

if (isset($_POST['enviar'])) {
   if (comprobar_email($_POST['direcciondecorreo']))
      echo 'El email introducido es correcto!, el correo es'.$_POST['direcciondecorreo'];
   else
      echo 'El email introducido NO es correcto!, por favor ingrese correo correctamente';
}

echo "<br>";

if(isset($_POST["asunto"]) && strlen($_POST["asunto"])>0)
{
 
	 echo "Se ha recibido correctamente el asunto que es: ".$_POST["asunto"];

}elseif(isset($_POST["asunto"])){

	// Lo normal es indicar que hay un error
 
	echo "El asunto no puede estar vacio";
}

echo "<br>";

if(isset($_POST['enviar']) && $_POST['comentarios']=="")
echo "la caja comentarios no puede quedar vacia"; 
else  echo "el comentario ha llegado correctamente, el comentario es: ".$_POST['comentarios']; 

?>


	                    </div>
	                    </div>
	                    	
	                    </form>

							</p>
						</section>
					</div>

				</div>
			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat.&rdquo;</blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->


	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>


	</body>
</html>