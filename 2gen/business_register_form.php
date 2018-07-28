<!DICTYPE html>
<html>
<head>
	<title>Registro de Comercio</title>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<!-- Bootstrap core CSS -->
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">


</head>

<?php

	session_start();

	if(!isset($_SESSION["usuario"])){

	//	header("location:business_register_login_check.php"); /*V60*/
		$sesion_iniciada = 0;

	} else
	$sesion_iniciada = 1;


?>

<body>

<div class="container">
    <form action="business_register_insert.php" method="post" class="form-signin" data-toggle="validator">
				<h2 class="form-signin-heading"> Registro de Negocios</h2>

				<div class="form-group row">
					<div class="col-3">
						<label for="Nombre">Nombre de la Empresa</label>
					</div>
					<div class="col-9">
						<input type="text" name="w_business_name" id="Nombre" class="form-control" required>
					</div>
				</div>

			<div class="form-group row">
				<div class="col-3">
				<label for=sector>Sector</label>
			</div>
				<div class="col-9">
					<select name="w_sector" id="Sector"  class="form-control">
						<option>Agricultura y ganadería</option>
						<option selected>Alimentos y nutrición</option>
						<option>Cosmetica y cuidado personal</option>
						<option>Construcción</option>
						<option>Electrónica</option>
						<option>Entretenimiento</option>
						<option>Logística y transporte</option>
						<option>Medios de comunicacion (periodicos, revistas)</option>
						<option>Mobiliario</option>
						<option>Productos de limpieza</option>
						<option>Ropa y accesorios</option>
						<option>Tecnología y telecomunicaciones</option>
						<option>Salud</option>
						<option>Seguros</option>
						<option>Servicios financieros</option>
						<option>Viajes, hotelería y turismo</option>
					</select>
				</div>
			</div>



			<div class="form-group row">
				<div class="col-3">
				<label for=Segmento>Segmento</label>
			</div>
				<div class="col-9">
					<select name="w_segment" id="Segmento"  class="form-control">
						<option selected>Segmento 1</option>
						<option>Segmento 2</option>
						<option>Segmento 3</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-3">
				<label for=Giro>Giro</label>
			</div>
				<div class="col-9">
					<select name="w_subsegment" id="Giro"  class="form-control">
						<option selected>Giro 1</option>
						<option>Giro 2</option>
						<option>Giro 3</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-3">
				<label for=Pais>País</label>
			</div>
				<div class="col-9">
					<select name="w_business_location" id="Pais"  class="form-control">
						<option>Argentina</option>
						<option>Bolivia</option>
						<option>Chile</option>
						<option>Colombia</option>
						<option>Costa Rica</option>
						<option>Cuba</option>
						<option>Ecuador</option>
						<option>El Salvador</option>
						<option>España</option>
						<option>Guatemala</option>
						<option>Honduras</option>
						<option selected>Mexico</option>
						<option>Nicaragua</option>
						<option>Panama</option>
						<option>Paraguay</option>
						<option>Perú</option>
						<option>Puerto Rico</option>
						<option>República Dominicana</option>
						<option>Uruguay</option>
						<option>Venezuela</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-3">
					<label for="CP">Código Postal</label>
				</div>
				<div class="col-9">
					<input type="number" min="1000" name="w_business_zipcode" id="CP" required>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-3">
					<label for="branches_number">
			Número de sucursales (en este país)</label>
		</div>
		<div class="col-9">
			<input type="number" min="1" value="1" placeholder="Escribe un número" name="w_branches_number" id="branches_number">
		</div>
	</div>


	<fieldset class="form-group">
		<label>¿Opera también en otro país?</label></br>
		<div class="form-check form-check-inline">
			<label class="form-check-label">
										<input type="radio" class="form-check-input" name="w_operations_abroad" id="operations_abroad1" value="Si">
				Sí
			</label>
		</div>
		<div class="form-check form-check-inline">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="w_operations_abroad" id="operations_abroad2" value="No" checked>
				No
			</label>
		</div>
	</fieldset>

 <?php
 	if($sesion_iniciada == 0){
echo
			'<legend>
				Para registrar tu negocio necesitas una cuenta de cliente.
				<a name="w_nuevo=SI" href="customer_register_form.php">Regístrate para obtener una</a>
				o accede con tus datos de usuario:
			</legend>

			<div class="form-group row">
				<div class="col-3">
				    <label for=email>Email (usuario)</label>
			  </div>
				<div class="col-9">
		        	E_mail (usuario) </td><td><input type="email" name="email" id="email">
			        Contraseña</td><td><input type="password" name="w_customer_password" id="w_customer_password">';
}
?>

			<button class="btn btn-primary" type="submit">¡Dale!</button>
        </form>
			</div>

<body/>
</html>
