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
	$fld06='customer_birth';
	$fld07='gender';
	$fld08='customer_locaton';
	$fld09='customer_email';
	$fld10='customer_phone';

	$name=$_POST["w_customer_name"];
	$last=$_POST["w_customer_last_name"];
	$user=$_POST["w_customer_username"];
	$password=$_POST["w_customer_password"];
	$birth=$_POST["w_customer_birth"];
	$gender=$_POST["w_gender"];
	$location=$_POST["w_customer_locaton"];
	$email=$_POST["w_customer_username"];
	$phone=$_POST["w_customer_phone"];
	$password_crypt=sha1($password);



include("conexion.php");

try{

	$sql="INSERT INTO customer (

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

			VALUES (
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
		":2"=>$name,
		":3"=>$last,
		":4"=>$email,
		":5"=>$password_crypt,
		":6"=>$birth,
		":7"=>$gender,
		":8"=>$location,
		":9"=>$email,
		":10"=>$phone
	));

	echo "Gracias por registrarte" . "<br><br>";

	echo "FELICIDADES:  Has recibido una maceta de cortesía por 6 meses para comenzar a sembrar tus c-millas";

	$sql2 = "SELECT customer_id FROM customer WHERE customer_username = :user";


	$resultado2=$base->prepare($sql2); /*Consulta preparada con marcadores, V49,50,53*/

	$resultado2->execute(array(":user"=>$user));

	$fila=$resultado2->fetch(PDO::FETCH_ASSOC);

	$Id = $fila['customer_id'];

	echo " tu ID es: " . $Id;

	$today = date("Y-m-d"); //fecha actual
	$six_months_date =
		date("Y-m-d",mktime(0, 0, 0, date("m")+6  , date("d"), date("Y"))); //fecha dentro de seis meses

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
				'$Id',
				'$today',
				'$six_months_date',
				'Vacía'
			)";

	$resultado3=$base->query($sql3);

	$resultado3->closeCursor();

	//Insertamos en la tabla que irá aactualizando balance
		$sql_balance="INSERT INTO customer_balance (
					customer_id,
					c_balance
				)

				VALUES(
					'$Id',
					0
				)";


				$resultado_balance=$base->query($sql_balance);
				$resultado_balance->closeCursor();

}catch(Exception $e){

	echo "<br> Línea del error: " . $e->getLine();
	echo "<br> Mensaje del error: " . $e->getMessage();

}


?>

<a href="index_customer.php">Volver a la página principal</a>

<body/>
</html>
