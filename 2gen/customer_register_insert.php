<!DOCTYPE html>
<html>
<head>
	<title>Registro de Usuarios</title>
	<meta charset="UTF-8">
</head>
<body>

<?php

	$fld02='customer_name';
	$fld03='customer_last_name';
	$fld04='customer_username';
	$fld05='customer_password';
	$fld06='customer_password_confirm';
	$fld07='customer_birth';
	$fld08='gender';
	$fld09='customer_locaton';
		
	$name=$_POST["w_customer_name"];
	$last=$_POST["w_customer_last_name"];
	$user=$_POST["w_customer_username"];
	$password=$_POST["w_customer_password"];
	$confirm=$_POST["w_customer_passwordConf"];
	$birth=$_POST["w_customer_birth"];
	$gender=$_POST["w_gender"];
	$location=$_POST["w_customer_locaton"];

try{

	$base=new PDO('mysql:host=localhost; dbname=cmillas', 'root', '');
		
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$base->exec("SET CHARACTER SET utf8");

	$sql="INSERT INTO CUSTOMER (

				$fld02, 
				$fld03, 
				$fld04, 
				$fld05, 
				$fld06, 
				$fld07, 
				$fld08, 
				$fld09
			)
			
			VALUES (
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
		":2"=>$name,
		":3"=>$last,
		":4"=>$user,
		":5"=>$password,
		":6"=>$confirm,
		":7"=>$birth,
		":8"=>$gender,
		":9"=>$location
	));

	echo "Gracias por registrarte" . "<br><br>";

	echo "FELICIDADES:  Has recibido una maceta de cortesía por 6 meses para comenzar a sembrar tus c-millas";
	
	$sql2 = "SELECT customer_id FROM customer WHERE customer_username = '$user'";

	$resultado2=$base->query($sql2);

	$Id = $resultado2->fetch(PDO::FETCH_BOTH);

	echo "tu ID es: " . $Id[0];

	$sql3 = "INSERT INTO pot_taken (
				pot_offer_id,
				business_id,
				customer_id,
				pot_val_ini,
				pot_val_fin,
				status
			)

			VALUES (
				'1',
				'1',
				'$Id[0]',
				'2018-05-13',
				'2018-11-12',
				'Vacía'
			)";

	$resultado3=$base->query($sql3);

	$resultado->closeCursor();

}catch(Exception $e){
			
	echo "<br> Línea del error: " . $e->getLine();
	echo "<br> Mensaje del error: " . $e->getMessage();

}	

	
?>

<a href="index_customer.php">Volver a la págnia principal</a>

<body/>
</html>