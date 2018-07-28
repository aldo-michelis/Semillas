<!DOCTYPE html>
<html>
<head>
	<title>Registro de Usuarios</title>
	<meta charset="UTF-8">
</head>

<?php

	session_start();

	if(!isset($_SESSION["usuario"])){

		header("location:login_form.php"); /*V60*/

	}

?>



<body>

<?php

	$fld02="business_name";
	$fld03="sector";
	$fld04="segment";
	$fld05="sub_segment";
	$fld06="business_location";
	$fld07="business_zipcode";
	$fld08="branches_number";
	$fld09="ops_abroad";
	$fld10="customer_id";

	$VAL02=$_POST["w_business_name"];
	$VAL03=$_POST["w_sector"];
	$VAL04=$_POST["w_segment"];
	$VAL05=$_POST["w_subsegment"];
	$VAL06=$_POST["w_business_location"];
	$VAL07=$_POST["w_business_zipcode"];
	$VAL08=$_POST["w_branches_number"];
	$VAL09=$_POST["w_operations_abroad"];
	$VAL10=$_SESSION["s_customer_id"];

	include("conexion.php");

try{
	$sql="INSERT INTO business (

				$fld02,
				$fld03,
				$fld04,
				$fld05,
				$fld06,
				$fld07,
				$fld08,
				$fld09,
				$fld10
			)

			VALUES(
				:2,
				:3,
				:4,
				:5,
				:6,
				:7,
				:8,
				:9,
				:10
			)";


	$resultado=$base->prepare($sql);

	$resultado->execute(array(
		":2"=>$VAL02,
		":3"=>$VAL03,
		":4"=>$VAL04,
		":5"=>$VAL05,
		":6"=>$VAL06,
		":7"=>$VAL07,
		":8"=>$VAL08,
		":9"=>$VAL09,
	  ":10"=>$VAL10
	));

	echo "Gracias por registrar tu negocio";

	$resultado->closeCursor();


	$sql="SELECT business_id
					FROM business
					WHERE business_name = :business AND customer_id = :customer";

	$resultado=$base->prepare($sql); /*Consulta preparada con marcadores, V49,50,53*/

	$resultado->execute(array(":business"=>$_POST["w_business_name"], ":customer"=>$_SESSION["s_customer_id"]));

	$fila=$resultado->fetch(PDO::FETCH_ASSOC);

	$_SESSION["s_business_id"]=$fila['business_id'];

}catch(Exception $e){

	echo "Línea del error: " . $e->getLine();
	echo "Línea del error: " . $e->getMessage();


}


?>

<a href="index_business.php">Ir a la página principal de negocios</a>

<body/>
</html>
