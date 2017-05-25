<?php
session_start();
$_SESSION["PHPSESSID"]=session_id();
echo "<script type='text/javascript' src='../jscript/funcionesGenerales.js'></script>";

      
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="../css/estilos.css">
	
	</head>
<body>
		<div class="container">
			<nav class="navbar navbar-inverse navbar-fixed-top">
				  <div class="container">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					  </button>
					  <a class="navbar-brand" href="#">PAGINA</a>
					  <div class="navbar-brand">
							<form class="forma-busqueda cf" action="/search.php" method="post">
								<label for="search_box">
								<span> </span>
								</label>
								<input name="keywords" id="search_box" type="text" placeholder="" >
								<input type="hidden" name="action" value="do_search" class="boton44"/>
							</form>
					  
					  </div>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
					
					  <form class="navbar-form navbar-right">
					  
						<!--<div class="form-group">
						  <input type="text" placeholder="Buscar..." class="form-control">
						</div>
						<button type="submit" class="btn btn-danger" >BUSCAR</button>-->
						<!--<button type="submit" class="btn btn-warning btn-sm" >Ingresar</button>-->
						<a href="singin.php" class="btn btn-warning btn-sm">Ingresar</a>
						<a href="Login.php" class="btn btn-warning btn-sm">Registrarse</a>
		
				
		
					  </form>
					  
					</div><!--/.navbar-collapse -->
				  </div>
			</nav>
		</div>
		<div class="jumbotron">
			<div class="container">
				<section class="main row">
					<div class="col-md-9">
					<ol class="pre-scrollable">
						
						<li class="intem-resultado">
							<div class="container">
								<div class="row">
									<div class="col-md-3">
									imagen
									</div>
									<div class="col-md-3">
									Nombre
									</div>
									<div class="col-md-3">
										<strong>precio
										</strong>
									</div>
									<div class="col-md-1">
										<ol>
											<li>vendedor</li>
											<li>nuevo</li>
										</ol>
									</div>
								</div>
							</div>
						</li>

						<li class="intem-resultado">
							<div class="container">
								<div class="row">
									<div class="col-md-3">
									imagen
									</div>
									<div class="col-md-3">
									Nombre
									</div>
									<div class="col-md-3">
										<strong>precio
										</strong>
									</div>
									<div class="col-md-1">
										<ol>
											<li>vendedor</li>
											<li>nuevo</li>
										</ol>
									</div>
								</div>
							</div>
						</li>
						
						<li class="intem-resultado">
							<div class="container">
								<div class="row">
									<div class="col-md-3">
									imagen
									</div>
									<div class="col-md-3">
									Nombre
									</div>
									<div class="col-md-3">
										<strong>precio
										</strong>
									</div>
									<div class="col-md-1">
										<ol>
											<li>vendedor</li>
											<li>nuevo</li>
										</ol>
									</div>
								</div>
							</div>
						</li>
						
						<li class="intem-resultado">
							<div class="container">
								<div class="row">
									<div class="col-md-3">
									imagen
									</div>
									<div class="col-md-3">
									Nombre
									</div>
									<div class="col-md-3">
										<strong>precio
										</strong>
									</div>
									<div class="col-md-1">
										<ol>
											<li>vendedor</li>
											<li>nuevo</li>
										</ol>
									</div>
								</div>
							</div>
						</li>
						
						<li class="intem-resultado">
							<div class="container">
								<div class="row">
									<div class="col-md-3">
									imagen
									</div>
									<div class="col-md-3">
									Nombre
									</div>
									<div class="col-md-3">
										<strong>precio
										</strong>
									</div>
									<div class="col-md-1">
										<ol>
											<li>vendedor</li>
											<li>nuevo</li>
										</ol>
									</div>
								</div>
							</div>
						</li>
						
						<li class="intem-resultado">
							<div class="container">
								<div class="row">
									<div class="col-md-3">
									imagen
									</div>
									<div class="col-md-3">
									Nombre
									</div>
									<div class="col-md-3">
										<strong>precio
										</strong>
									</div>
									<div class="col-md-1">
										<ol>
											<li>vendedor</li>
											<li>nuevo</li>
										</ol>
									</div>
								</div>
							</div>
						</li>
						
					</ol>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, at nihil voluptate delectus optio nobis velit. Quod, sequi, accusamus, rerum fugiat in temporibus ipsum ullam esse doloribus provident unde nobis?
					</div>
					<div>
						<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
						  <div class="list-group"><b>
						 	<a href="#" class="list-group-item">ARTE</a>
							<a href="#" class="list-group-item">TECNOLOGIA</a>
							<a href="#" class="list-group-item">MODA</a>
							<a href="#" class="list-group-item">HOGAR</a>
							<a href="#" class="list-group-item">VEHICULOS</a>
							<a href="#" class="list-group-item">MUSICA</a>
							<a href="#" class="list-group-item">DEPORTE</a>
							<a href="#" class="list-group-item">PASATIEMPOS</a>
							<a href="#" class="list-group-item">OTRAS</a>
							</b>
						  </div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<div class="jumbotron">
		<div class="container">
			<div class="row">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, repellat, sunt, rerum sit ab est consequuntur quo id optio minima repellendus debitis omnis quidem nihil ullam saepe nisi nulla. Similique.
		
		<div class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
			<img src="../images/engine-icon.png" alt="">
				<!--Cuenta <b class="caret"></b>-->
			</a>
			<ul class="dropdown-menu" style="background:#f0ad4e">
				<li><a href="#"><b>Mi Cuenta</b></a></li>
				<li class="divider"></li>
				<li><a href="#"><b>Cambiar Email</b></a></li>
				<li><a href="#"><b>Cambiar Password</b></a></li>
				<li class="divider"></li>
				<li><a href="#"><b>Logout</b></a></li>
			</ul>
		</div>
		</div>	
	
		</div>








 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</body>
</html>

<?php

?>