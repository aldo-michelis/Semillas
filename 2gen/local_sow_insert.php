<!DICTYPE html>
<html>
<head>
	<title>Registro de Semillas Locales</title>
	<meta charset="UTF-8">
</head>
<body>

<?php

session_start();

if(!isset($_SESSION["usuario"])){

	header("location:login_form.php"); /*V60*/

}

echo "Business: " . $_SESSION["s_business_id"];

	$fld1="sow_lc_cds_id";
	$fld2="type";
	$fld3="monetary_value";
	//$fld4="percent_value";
	$fld5="description";
	$fld6="quantity_start";
	//$fld7="quantity_left";
	$fld8="publication_start";
	$fld9="publication_end";
	$fld10="valid_start";
	$fld11="valid_end";
	$fld12="business_id";

	$VAL2=$_GET["w_type"];
	$VAL3=$_GET["w_monetary_value"];
	//$VAL4=$_GET["w_percent_value"];
	$VAL5=$_GET["w_description"];
	$VAL6=$_GET["w_quantity_start"];
	$VAL8=$_GET["w_publication_start"];
	$VAL9=$_GET["w_publication_end"];
	$VAL10=$_GET["w_valid_start"];
	$VAL11=$_GET["w_valid_end"];
	$VAL12=$_SESSION["s_business_id"]; //aquí se insertará el id del negocio logueado

include ("conexion.php");


try{
	$sql="INSERT INTO local_sow (
				$fld2,
				$fld3,
				$fld5,
				$fld6,
				$fld8,
				$fld9,
				$fld10,
				$fld11,
				$fld12
			)

			VALUES (
				:2,
				:3,
				:5,
				:6,
				:8,
				:9,
				:10,
				:11,
				:12
			)";
	$resultado=$base->prepare($sql);

	$resultado->execute(array(

		":2"=>$VAL2,
		":3"=>$VAL3,
		":5"=>$VAL5,
		":6"=>$VAL6,
		":8"=>$VAL8,
		":9"=>$VAL9,
		":10"=>$VAL10,
		":11"=>$VAL11,
		":12"=>$VAL12
	));

	echo "Felicidades: acabas de diseminar tu negocio!";

	$resultado->closeCursor();

}catch(Exception $e){

	echo "Línea del error: " . $e->getLine();
	echo "Línea del error: " . $e->getMessage();


}


?>

<br>
<br>
<a href="Index_Business.php" name="Volver al Menú Principal">Volver al Menú Principal</a>

<body/>
</html>
