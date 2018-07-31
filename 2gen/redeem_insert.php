<!DICTYPE html>
<html>
<head>
	<title>Redención de Semillas</title>
	<meta charset="UTF-8">
</head>
<body>

<?php
	/*
	session_start();

	if(!isset($_SESSION["usuario"])){

		header("location:login_proced.php");


	}
	*/

	include("conexion.php");

	$l_code=$_GET["w_redeem_code"];

  	$sql="SELECT * FROM local_plant WHERE code = :code_tag";

	$resultado=$base->prepare($sql);

	$resultado->execute(array(":code_tag"=> $_GET["w_redeem_code"]));

	$numero_registro=$resultado->rowCount(); /*V59,19:00*/

	if($numero_registro!=0){

		$sql2 = "SELECT local_plant.local_sow_id as local_sow_id, monetary_value, description
		FROM local_plant
		JOIN local_sow ON local_plant.local_sow_id = local_sow.local_sow_id
		WHERE code = '$l_code'";


		$resultado2=$base->query($sql2);

		$fila = $resultado2->fetch(PDO::FETCH_ASSOC);

		echo "El código es válido";

		echo " <br> Las Semillas corresponden a la dispersión:" . $fila['local_sow_id'];

		//$temp_monetary = $monetary_value[0];

		echo "<br>La cantidad de semillas de la emisión es:" . $fila['monetary_value'];

		echo "<br>La descripción de la emisión es:" . $fila['description'];

		echo "<br>¿Deseas autorizar la redención? ";

		echo "<a href='redeem_authorize.php?code=" . $l_code . "'>Autorizar</a>";


	}else{

		echo "El código no es válido <br>";
		/*
		echo "<a href="redeem_form.php" name="Redimir otras Semillas">Redimir otras Semillas</a><br>"
		echo "<a href="business_indez.php" name="Volver al menú principal de negocios">Volver al menú principal de negocios</a><br>"
		*/

	}


/*
_________________________________________
	$fld1="local_plant_id";
	$fld2="local_sow_id";
	$fld3="business_id";
	$fld4="customer_id";
	$fld5="pot_taken_id";
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

*/
