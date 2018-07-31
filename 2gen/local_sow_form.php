<!DOCTYPE html>
<html>
<head>
	<title>Generador de Semillas Locales</title>
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
		$( "#publication_start" ).datepicker({
		dateFormat: 'yy-mm-dd'
			});
	} );
	</script>

	<script>
	$( function() {
		$( "#publication_end" ).datepicker({
		dateFormat: 'yy-mm-dd'
		});
	} );
	</script>

	<script>
	$( function() {
		$( "#valid_start" ).datepicker({
		dateFormat: 'yy-mm-dd'
		});
	} );
	</script>

	<script>
	$( function() {
		$( "#valid_end" ).datepicker({
		dateFormat: 'yy-mm-dd'
		});
	} );
	</script>


</head>


<body>

	<?php

	session_start();

	if(!isset($_SESSION["usuario"])){

		header("location:login_form.php"); /*V60*/

	}
	?>




	<div class="container">
<h1 class="form-signin-heading"> Generador de Semillas</h1>

<form name="local_sow_form" method="get" action="local_sow_insert.php" class="form-signin">


	<div class="form-group row">
		<div class="col-3">
		<label for=w_type>Tipo de C-milla: </label>
	</div>
		<div class="col-9">
			<select name="w_type" id="type"  class="form-control">
				<option selected>Local</option>
				<option>Universal</option>
			</select>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-3">
			<label for="w_quantity_start">Cantidad de emisiones </label>
		</div>
		<div class="col-9">
			<input type="number" name="w_quantity_start" placeholder="Escribe un número" min="1" class="form-control" required>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-3">
		<label for="w_monetary_value">Cantidad de C-millas por emisión:
		</label>
	 </div>
	 <div class="col-9">
			<input type="number" min="1" placeholder="Esribe un número" name="w_monetary_value" class="form-control" required>
		</div>
	</div>

<div class="form-group row">
	<div class="col-3">
		<label for="w_description">Descripción de la promoción: </label>
	</div>
	<div class="col-9">
		<input type="text" name="w_description" placeholder="Describe brevemente... " class="form-control" required>
	</div>
</div>

<div class="form-group row">
	<div class="col-3">
	<label for"w_publication_start" >Publicar desde: </label>
</div>
	<div class="col-9">
		<input type="text" name="w_publication_start" id="publication_start" class="form-control" placeholder="Selecciona..." required>
	</div>
</div>

<div class="form-group row">
	<div class="col-3">
	<label for"w_publication_end" >Publicar hasta: </label>
</div>
	<div class="col-9">
		<input type="text" name="w_publication_end" id="publication_end" class="form-control" placeholder="Selecciona..." required>
	</div>
</div>

<div class="form-group row">
	<div class="col-3">
	<label for"w_valid_start" >Válida desde: </label>
</div>
	<div class="col-9">
		<input type="text" name="w_valid_start" id="valid_start" class="form-control" placeholder="Selecciona..." required>
	</div>
</div>

<div class="form-group row">
	<div class="col-3">
	<label for"w_valid_end" >Válida hasta: </label>
</div>
	<div class="col-9">
		<input type="text" name="w_valid_end" id="valid_end" class="form-control" placeholder="Selecciona..." required>
	</div>
</div>


<div class="form-group row">
	<div class="col-3">
		<button type="submit" class="btn btn-primary">Crear Semillas</button>
	</div>
</div>

  </table>

</form>
</div>
</body>

</html>
