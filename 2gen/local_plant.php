<!DICTYPE html>
<html>
<head>
	<title>Plantado de Semillas Locales</title>
	<meta charset="UTF-8">
</head>
<body>

<?php
	session_start();
	
	if(!isset($_SESSION["usuario"])){
		
		header("location:login_proced.php"); /*V60*/
		
	}

	include("conexion.php");

	$fld1="local_plant_id";
	$fld2="local_sow_id";
	$fld3="business_id";
	$fld4="customer_id";
	$fld5="pot_taken_id";

		// Generador de códigos aleatorios
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		$random_string = '';
		$max = strlen($characters) - 1;
		for ($i = 0; $i < 6; $i++) {
			$random_string .= $characters[mt_rand(0, $max)];
		}

	$VAL2=$_GET["w_local_sow_id"];
	$VAL3=$_GET["w_business_id"];
	$VAL4=$_SESSION["s_customer_id"];
	$VAL5=$_GET["w_pot_taken_id"];
	$VAL6=$random_string;


	try {
		$sql = "INSERT INTO local_plant (
					local_sow_id,
					business_id,
					customer_id,
					pot_taken_id,
					code
				)
				
				VALUES (
					'$VAL2',
					'$VAL3',
					'$VAL4',
					'$VAL5',
					'$VAL6'
				)";
				
	
		$resultados = $base->query($sql);



		echo "C-milla sembrada con éxito. El fruto de tu planta te espera la etiqueta: " . $random_string . "<br>";


	} catch (Exception $e) {
					
	echo "<br> Línea del error: " . $e->getLine();
	echo "<br> Mensaje del error: " . $e->getMessage();

	}

	try {
		
		$sql = "UPDATE local_sow SET quantity_left=quantity_left-1 WHERE $fld2 = '$VAL2'";
	
		
		$resultados = $base->query($sql);
	
		echo "Disminución de c-millas restantes exitosa <br>";
		
	} catch (Exception $e) {
						
	echo "<br> Línea del error: " . $e->getLine();
	echo "<br> Mensaje del error: " . $e->getMessage();
	
	}

	try {
		
		$sql = "UPDATE pot_taken SET status='Ocupada' WHERE pot_taken_id = '$VAL5'";
	
		
		$resultados = $base->query($sql);
	
		echo "Cambio de status a maceta Ocupada exitoso";
		
	} catch (Exception $e) {
						
	echo "<br> Línea del error: " . $e->getLine();
	echo "<br> Mensaje del error: " . $e->getMessage();
	
	}


?>

<br>
<br>
<a href="index_customer.php" name="Volver al Menú Principal">Volver al Menú Principal</a>

<body/>
</html>