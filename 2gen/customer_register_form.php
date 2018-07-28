<!DICTYPE html>
<html>
<head>
	<title>Registro de Usuarios</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<!-- Bootstrap core CSS -->
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
	<script>
  $( function() {
    $( "#Nacimiento" ).datepicker({
		dateFormat: 'yy-mm-dd',
    changeYear: true,
		yearRange: "-18:-100"
		});
  } );
  </script>

</head>

<body>

<div class="container">
    <form action="customer_register_insert.php" method="post" class="form-signin" data-toggle="validator">
				<h2 class="form-signin-heading"> Registro de Usuarios</h2>

				<div class="form-group row">
					<div class="col-3">
						<label for="Nombre">Nombre</label>
					</div>
						<div class="col-9">

						<input type="text" name="w_customer_name" id="Nombre" placeholder="Nombre" class="form-control" required>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-3">
						<label for="Apellidos">Apellidos</label>
					</div>
					<div class="col-9">
						<input type="text" name="w_customer_last_name" id="Apellidos" placeholder="Apellidos" class="form-control" required>
					</div>
				</div>

			 <div class="form-group row">
				 <div class="col-3">
				 <label for="Username">E-mail</label>
			 </div>
				 <div class="col-9">
					 <input type="email" name="w_customer_email" id="Username"  class="form-control" placeholder="Email" required>
				 </div>
			 </div>

			<div class="form-group row">
				<div class="col-3">
				<label for="Username" >Celular</label>
			</div>
				<div class="col-9">
					<input type="text" name="w_customer_phone" id="phone" class="form-control" placeholder="Teléfono móvil" required>
				</div>
			</div>


			<div class="form-group row">
				<div class="col-3">
				<label for="Password" >Contraseña</label>
			</div>
				<div class="col-9">
					<input type="password" name="w_customer_password" id="Password" class="form-control" placeholder="Contraseña" required>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-3">
				<label for="ConfPassword">Confirma contraseña</label>
			</div>
				<div class="col-9">
					<input type="password" name="w_customer_passwordConf" id="ConfPassword" class="form-control" placeholder=" confirma tu contraseña" data-match="#Password" data-match-error="La confirmación no coincide con el password" required>
				</div>
				<div class="help-block with-errors"></div>
			</div>

			<div class="form-group row">
				<div class="col-3">
				<label for"Nacimiento" >Fecha de nacimiento</label>
			</div>
				<div class="col-9">
					<input type="text" name="w_customer_birth" id="Nacimiento" class="form-control" placeholder="Selecciona..." required>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-3">
				<label for=ubicacion>País</label>
			</div>
				<div class="col-9">
					<select name="w_customer_locaton" id="Ubicación"  class="form-control">
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

			<fieldset class="form-group">
				<legend>Género</legend>
				<div class="form-check form-check-inline">
					<label class="form-check-label">
												<input type="radio" class="form-check-input" name="w_gender" id="Genero1" value="M" checked>
						Masculino
					</label>
				</div>
				<div class="form-check form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="w_gender" id="Genero2" value="F">
						Femenino
					</label>
				</div>
			</fieldset>

<div class="form-group row">
			<button class="btn btn-primary" type="submit">¡Dale!</button>
		</div>
		</form>
	</div>
<body/>
</html>
