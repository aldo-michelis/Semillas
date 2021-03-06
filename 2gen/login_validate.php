<!DICTYPE html>
<html>
<head>
	<title>Comprueba Login</title>
	<meta charset="UTF-8">
</head>

<body>

<?php

require("conexion.php");

try{

	$sql="SELECT * FROM customer WHERE customer_username= :login AND customer_password= :password"; /*Marcadores ":name" V54*/

	$resultado=$base->prepare($sql); /*Consulta preparada con marcadores, V49,50,53*/

	$resultado->execute(array(":login"=> $_POST["login"], ":password"=>sha1($_POST["password"])));

	$numero_registro=$resultado->rowCount(); /*V59,19:00*/

	if($numero_registro!=0){

		session_start(); /*V60,5:00*/

		$_SESSION["usuario"]=$_POST["login"];

/*Traemos el id del usuario y del negocio
(en caso de que no tenga negocio registrado, solo trae el usuario)*/
		$sql="SELECT customer.customer_id as customer_id, business.business_id as business_id
						FROM customer
		 				LEFT JOIN business ON customer.customer_id = business.customer_id
						WHERE customer_username = :login AND customer_password = :password";

		$resultado=$base->prepare($sql); /*Consulta preparada con marcadores, V49,50,53*/

		//se encripta el password ingresado para compararlo con el de la BD previamnte encriptado)
		$resultado->execute(array(":login"=>$_POST["login"], ":password"=>sha1($_POST["password"])));

		$fila=$resultado->fetch(PDO::FETCH_ASSOC);

		$_SESSION["s_customer_id"]=$fila['customer_id'];
		$_SESSION["s_business_id"]=$fila['business_id'];


		header("location:index_customer.php");

	}else{

		session_destroy();

		header("location:login_form.php"); /*V59,21:00*/


	}

}catch(Exception $e){

	die("Error: " . $e->getMessage());

}


?>
<body/>
</html>
