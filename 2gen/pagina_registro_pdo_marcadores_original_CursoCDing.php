<!DICTYPE html>
<html>
<head>
	<title>Página en blanco. V53-54</title>
	<meta charset="UTF-8">
</style>
</head>
<body>
<?php
	
	$busqueda_art= $_POST["c_art"];
	$busqueda_seccion= $_POST["seccion"];
	$busqueda_nart= $_POST["n_art"];
	$busqueda_precio= $_POST["precio"];
	$busqueda_fecha= $_POST["fecha"];
	$busqueda_importado= $_POST["importado"];
	$busqueda_porig= $_POST["p_orig"];
	
	try{
		
		$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$base->exec("SET character set UTF8");
		
		// $sql="SELECT NOMBREARTICULO, SECCION, PRECIO, PAISDEORIGEN FROM PRODUCTOS WHERE NOMBREARTICULO = ?"; /*Sin marcador V53*/
		// $sql="SELECT NOMBREARTICULO, SECCION, PRECIO, PAISDEORIGEN FROM PRODUCTOS WHERE SECCION = :SECC AND PAISDEORIGEN = :PORIG"; /*Con marcador V54*/
		
		$sql="INSERT INTO PRODUCTOS (CODIGOARTICULO, SECCION, NOMBREARTICULO, PRECIO, FECHA, IMPORTADO, PAISDEORIGEN) 
		VALUES (:c_art, :seccion, :n_art, :precio, :fecha, :importado, :p_orig)";
		
		$resultado=$base->prepare($sql); 
		
		// $resultado->execute(array($busqueda_sec]));/*Sin marcadores*/
		// $resultado->execute(array(":SECC"=>$busqueda_sec, ":PORIG"=>$busqueda_porig)); /*Con marcadores*/

		$resultado->execute(array(":c_art"=>$busqueda_art, ":seccion"=>$busqueda_seccion, ":n_art"=>$busqueda_nart, 
		":precio"=>$busqueda_precio, ":fecha"=>$busqueda_fecha, ":importado"=>$busqueda_importado, ":p_orig"=>$busqueda_porig));
		
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