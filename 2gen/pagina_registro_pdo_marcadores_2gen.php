<!DICTYPE html>
<html>
<head>
	<title>Página en blanco. V53-54</title>
	<meta charset="UTF-8">
</style>
</head>
<body>
<?php
	
	$busqueda_customer_name= $_POST["w_customer_name"];
	$busqueda_customer_last_name= $_POST["w_customer_last_name"];
	$busqueda_customer_username= $_POST["w_customer_username"];
	$busqueda_customer_password= $_POST["w_customer_password"];
	$busqueda_customer_password_confirm= $_POST["w_customer_passwordConf"];
	$busqueda_customer_birth= $_POST["w_customer_birth"];
	$busqueda_gender= $_POST["w_gender"];
	$busqueda_customer_locaton= $_POST["w_customer_locaton"];
	
	try{
		
		$base=new PDO('mysql:host=localhost; dbname=cmillas', 'root', '');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$base->exec("SET character set UTF8");
		
		// $sql="SELECT NOMBREARTICULO, SECCION, PRECIO, PAISDEORIGEN FROM PRODUCTOS WHERE NOMBREARTICULO = ?"; /*Sin marcador V53*/
		// $sql="SELECT NOMBREARTICULO, SECCION, PRECIO, PAISDEORIGEN FROM PRODUCTOS WHERE SECCION = :SECC AND PAISDEORIGEN = :PORIG"; /*Con marcador V54*/
		
		$sql="INSERT INTO customer (
				customer_name, 
				customer_last_name, 
				customer_username, 
				customer_password, 
				customer_password_confirm, 
				customer_birth, 
				gender, 
				customer_locaton)
				
			VALUES (
				:1, 
				:2, 
				:3, 
				:4, 
				:5, 
				:6, 
				:7, 
				:8
			)";
		
		$resultado=$base->prepare($sql); 
		
		// $resultado->execute(array($busqueda_sec]));/*Sin marcadores*/
		// $resultado->execute(array(":SECC"=>$busqueda_sec, ":PORIG"=>$busqueda_porig)); /*Con marcadores*/

		$resultado->execute(array(
		":1"=>$busqueda_customer_name, 
		":2"=>$busqueda_customer_last_name, 
		":3"=>$busqueda_customer_username, 
		":4"=>$busqueda_customer_password, 
		":5"=>$busqueda_customer_password_confirm, 
		":6"=>$busqueda_customer_birth, 
		":7"=>$busqueda_gender,
		":8"=>$busqueda_customer_locaton));
		
		// while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
			
				// echo "Nombre Artículo" . $registro['NOMBREARTICULO'] . "Secicón: " . $registro["SECCION"] . 
				// "Precio: " . $registro["PRECIO"] . "País de origen: " . $registro["PAISDEORIGEN"] . "<BR>";
				
		// }
		
		echo "Registro insertado";
		
		$resultado->closeCursor();
		
	}catch(Exception $e){
		
			die('Error: ' . $e->GetMessage());
		
	}
	
?>
<body/>
</html>