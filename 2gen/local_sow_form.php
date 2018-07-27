<!DICTYPE html>
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
		dateFormat: 'yy-mm-dd',
		changeYear: true,
		yearRange: "-100:+0"
		});
	} );
	</script>

	<script>
	$( function() {
		$( "#publication_end" ).datepicker({
		dateFormat: 'yy-mm-dd',
		changeYear: true,
		yearRange: "-100:+0"
		});
	} );
	</script>

	<script>
	$( function() {
		$( "#valid_start" ).datepicker({
		dateFormat: 'yy-mm-dd',
		changeYear: true,
		yearRange: "-100:+0"
		});
	} );
	</script>

	<script>
	$( function() {
		$( "#valid_end" ).datepicker({
		dateFormat: 'yy-mm-dd',
		changeYear: true,
		yearRange: "-100:+0"
		});
	} );
	</script>


</head>


<body>
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
		<label for="w_monetary_value">Valor monetario de la C-milla:
		</label>
	 </div>
	 <div class="col-9">
			<input type="number" name="w_monetary_value" class="form-control">
		</div>
	</div>

	<div class="form-group row">
		<div class="col-3">
		<label for="w_percent_value">Porcentaje de descuento: </label>
	</div>
		<div class="col-9">
		<input type="number" name="w_percent_value">
	</div>
</div>

<div class="form-group row">
	<div class="col-3">
		<label for="w_description">Descripción de la promoción: </label>
	</div>
	<div class="col-9">
		<input type="text" name="w_description">
	</div>
</div>

<div class="form-group row">
	<div class="col-3">
		<label for="w_quantity_start">Cantidad de C-millas: </label>
	</div>
	<div class="col-9">
		<input type="number" name="w_quantity_start">
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
	<label for"w_valid_start" >Publicar desde: </label>
</div>
	<div class="col-9">
		<input type="text" name="w_valid_start" id="valid_start" class="form-control" placeholder="Selecciona..." required>
	</div>
</div>

<div class="form-group row">
	<div class="col-3">
	<label for"w_valid_end" >Publicar hasta: </label>
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
