<!DICTYPE html>
<html>
<head>
	<title>Registro de Negocios</title>
	<meta charset="UTF-8">
</head>
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

	$VAL02=$_POST["w_business_name"];
	$VAL03=$_POST["w_sector"];
	$VAL04=$_POST["w_segment"];
	$VAL05=$_POST["w_subsegment"];
	$VAL06=$_POST["w_business_location"];
	$VAL07=$_POST["w_business_zipcode"];
	$VAL08=$_POST["w_branches_number"];
	$VAL09=$_POST["w_operations_abroad"];
	
try{

	$base=new PDO('mysql:host=localhost; dbname=cmillas', 'root', '');
		
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$base->exec("SET CHARACTER SET utf8");

	$sql="INSERT INTO business (

				$fld02, 
				$fld03, 
				$fld04, 
				$fld05, 
				$fld06, 
				$fld07, 
				$fld08, 
				$fld09 
			)

			VALUES(
				:2,
				:3,
				:4,
				:5,
				:6,
				:7,
				:8,
				:9
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
		":9"=>$VAL09));

	echo "Gracias por registrar tu negocio";
	
	$resultado->closeCursor();

}catch(Exception $e){
			
	echo "Línea del error: " . $e->getLine();

}	

	
?>

<a href="index.php">Volver a la págnia principal</a>

<body/>
</html>