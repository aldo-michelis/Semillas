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


try{

	$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
		
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$base->exec("SET CHARACTER SET utf8");

	$sql="DELETE FROM CUSTOMER WHERE customer_id=:c_i";
	
	$resultado=$base->prepare($sql);
	
	$resultado->execute(array(":c_i"=>$name));

	echo "Registro eliminado";
	
	$resultado->closeCursor();

}catch(Exception $e){
			
	echo "Línea del error: " . $e->getLine();

}	

	
?>

<a href="index.php">Volver a la págnia principal</a>

<body/>
</html>