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

	// $fld1="local_plant_id";
	// $fld2="local_sow_id";
	// $fld3="business_id";
	// $fld4="customer_id";
	// $fld5="pot_id";

	$VAL2=$_GET["w_local_sow_id"];
	$VAL3=$_GET["w_business_id"];
	$VAL4=$_SESSION["s_customer_id"];
			// $VAL6=$_GET["w_sow_lc_cds"];
			// $VAL5=$_GET["w_description"];
			// $VAL6=$_GET["w_quantity_start"];
			// $VAL8=$_GET["w_publication_start"];
			// $VAL9=$_GET["w_publication_end"];
			// $VAL10=$_GET["w_valid_start"];
			// $VAL11=$_GET["w_valid_end"];
			// $VAL12=$_GET["w_business_id"]; //aquí se inserta el id del negocio emisor
	

	try {

		$sql = "SELECT pot_taken_id, pot_offer_id, business_id, customer_id, pot_val_ini, pot_val_fin, status FROM pot_taken WHERE customer_id = '$VAL4' AND status = 'Vacía'";

		// $resultados=$base->query($sql);

		$registros=$base->query($sql)->fetchAll(PDO::FETCH_OBJ);

		if (!isset($registros)) {

			echo "No tienes macetas disponibles pero puedes tomar una ahora y pagarla en tu próxima compra:<br><br>";
			echo "1 mes - $5 <br>";
			echo "3 meses - $10 <br>";
			echo "6 meses - $15 <br>";
			echo "12 meses - $20 <br><br>";
			echo "<a href='pot_store.php'> Ir a la tienda de macetas</a>";

			
		}else{

			echo "Selecciona la maceta en la que quieres sembrar tu nueva c-milla: <br><br>";

			foreach($registros as $maceta){

				echo $maceta->pot_taken_id . " - ";
				echo $maceta->pot_offer_id . " - ";
				echo $maceta->business_id . " - ";
				echo $maceta->customer_id . " - ";
				echo $maceta->pot_val_ini . " - ";
				echo $maceta->pot_val_fin . " - ";
				echo $maceta->status . " - ";
				echo "<a href='local_plant.php?w_pot_taken_id=" . $maceta->pot_taken_id . "&w_local_sow_id=" . $VAL2 . "&w_business_id=" . $VAL3 . "&s_customer_id=" . $VAL4 . "'>Selecciona</a>";
				echo "<br>";

			}

			
		}
		
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