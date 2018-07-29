<!DICTYPE html>
<html>
<head>
	<title>Buscador de Semillas Locales</title>
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
		$( "#publication_end" ).datepicker({
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


<div class="filters">
<h1 class="form-signin-heading">Buscador de Semillas</h1>

<form name="sow_lc_cds_search_form" method="get" action="local_search_insert.php" class="form-signin">



	<div class="form-group row">
		<div class="col-3">
		<label for="w_business_name">Nombre del negocio: </label>
	</div>
		<div class="col-9">
		<input type="text" name="w_business_name">
	</div>
	</div>

	<div class="form-group row">
		<div class="col-3">
		<label for="w_monetary_value">Valor monetario de la C-milla: </label>
	</div>
		<div class="col-3">
			<input type="number" name="w_monetary_value">
		</div>
		<div class="col-3">
		<label for="w_percent_value">Porcentaje de descuento máximo:</label>
	</div>
		<div class="col-3">
			<input type="number" max="100" min="1" name="w_percent_value">
		</div>
	</div>

	<div class="form-group row">
		<div class="col-3">
		<label for="w_type">Tipo de C-milla: </label>
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
		<label for="w_quantity_left">Cantidad de C-millas restantes, menor a: </label>
	</div>
		<div class="col-9">
   <input type="number" name="w_quantity_left">
</div>
</div>

	<div class="form-group row">
		<div class="col-3">
		<label for="w_publication_end">	Disponibles hasta antes del: </label>
	</div>
		<div class="col-3">
<input type="text" name="w_publication_end" id="publication_end">
</div>

		<div class="col-3">
		<label for=w_valid_end>Vigencia de las C-millas hasta antes del: </label>
	</div>
		<div class="col-3">
	<input type="text" name="w_valid_end" id="valid_end">
</div>
</div>

  <button type="submit" class="btn btn-primary">Buscar</button>

</form>

<body/>
</html>
