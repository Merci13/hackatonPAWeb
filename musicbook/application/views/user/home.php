<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome to CodeIgniter</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</head>
	<body>
<!--Se supone que esta vista es llamada desde el controller home.php-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12"   style="background-color: #5c5ce2;width: 100%;height: 50px;"">
					
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row"><!--titulo-->
				<div class="col-sm-12 col-md-6 col-lg-6" style="padding-bottom:50px">
					<h1>Bienvenido a MusicBook </h1>
					<h3>Tu red social de musica</h3>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6">
					<h1>Descripción</h1>
					<p>Esta es una red social pensada para aquellos amantes de la musica <br> donde puedas interactuar con personas, amigos, familiares que gustes de tus mismos gustos musicales, y porque no <br> <strong>talvez descubras nuevos gustos ;-) </strong> </p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<form method="POST" action=<?php echo site_url('user/list') ?>>
					<input type="text" name="busqueda">
					<label for="busqueda" type="submit" class="btn btn-success">Buscar</label>
					
				</form>
			</div>
		</div>



	</body>
</html>