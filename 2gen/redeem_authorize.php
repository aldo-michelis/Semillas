<!DOCTYPE html>
<html>
<head>
	<title>Redención de Semillas</title>
	<meta charset="UTF-8">
</head>

<style>
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
		yearRange: "-100:+0"
		});
  } );
  </script>

</style>
</head>



<body>

<?php

	include("conexion.php");

	$l_code=$_GET["code"];


try {
	$sql = "SELECT local_plant.local_sow_id AS local_sow_id,
					monetary_value, description, type, customer_id, local_plant.business_id AS business_id
		FROM local_plant
		JOIN local_sow ON local_plant.local_sow_id = local_sow.local_sow_id
		WHERE code = '$l_code'";

	$resultado = $base->query($sql);
	$fila = $resultado->fetch(PDO::FETCH_ASSOC);

	$l_monetary=$fila["monetary_value"];
	$l_type=$fila["type"];
	$l_customer=$fila["customer_id"];
	$business_id=$fila["business_id"];

	echo "El código es: " . $l_code;
	echo "<br>El número de C-millas redimidas es: " . $l_monetary;
	echo "<br>El tipo de C-milla es: " . $l_type;
	echo "<br>El cliente que redime es: " . $l_customer;



	echo " <br> El negocio que realizó la redención es: " . $business_id;

	if($l_type == 'Local'){

		$sql2 = "UPDATE business_balance SET b_balance = b_balance + $l_monetary WHERE business_id = $business_id[0]";
		$resultado2=$base->query($sql2);
		echo "<br>Esta fue una redención Local";

	}else{
		if ($l_type == 'Universal') {
			$sql3 = "UPDATE business_balance SET b_balance = b_balance - $l_monetary WHERE business_id = $business_id[0]";
			$resultado3=$base->query($sql3);

			$sql4 = "UPDATE customer_balance SET c_balance = c_balance + $l_monetary WHERE customer_id = $l_customer";
			$resultado4=$base->query($sql4);

		echo "<br>Esta fue una redención Universal";


		}
	}
} catch (Exception $e) {

echo "<br> Línea del error: " . $e->getLine();
echo "<br> Mensaje del error: " . $e->getMessage();

}



?>

</body>
</html>
