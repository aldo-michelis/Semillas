<!DICTYPE html>
<html>
<head>
	<title>Página en blanco. V53-54</title>
	<meta charset="UTF-8">
</style>
</head>
<body>
<?php
	
	$l_business_name= $_POST["w_business_name"];
	$l_monetary_value= $_POST["w_monetary_value"];
	$l_percent_value= $_POST["w_percent_value"];
	$l_type= $_POST["w_type"];
	$l_origin= $_POST["w_origin"];
	$l_quantity_left= $_POST["w_quantity_left"];
	$l_publication_end= $_POST["w_publication_end"];
	$l_valid_end= $_POST["w_valid_end"];
	
	try{
		
		$base=new PDO('mysql:host=localhost; dbname=cmillas', 'root', '');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$base->exec("SET character set UTF8");
		
		$sql="SELECT 
				local_sow_id, 
				business_name, 
				monetary_value, 
				percent_value,
				type,
				business_id/*, 
				origin, 
				description,
				quantity_left,
				publication_end,
				valid_end*/

			FROM 
				local_sow 

			WHERE 
				business_name = :1 
			OR 
				monetary_value =:2
			OR 
				percent_value =:3
			OR 
				type =:4
			OR 
				origin =:5
			OR 
				quantity_left =:6
			OR 
				publication_end =:7
			OR 
				valid_end =:8
			"; /*Con marcador V54*/
		
		
		$resultado=$base->prepare($sql); 
		
		// $resultado->execute(array(":SECC"=>$busqueda_sec, ":PORIG"=>$busqueda_porig)); /*Con marcadores*/

		$resultado->execute(array(
						":1"=>$l_business_name, 
						":2"=>$l_monetary_value, 
						":3"=>$l_percent_value, 
						":4"=>$l_type, 
						":5"=>$l_origin, 
						":6"=>$l_quantity_left, 
						":7"=>$l_publication_end,  
						":8"=>$l_valid_end
					)); 


		
		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
			
				echo 
				"ID diseminación: " . $registro['local_sow_id'] . 
				"Negocio" . $registro['business_name'] . 
				"Valor Monetario: " . $registro["monetary_value"] . 
				"Ahorro máximo: " . $registro["percent_value"] . 
				"Tipo de C-milla: " . $registro["type"] . 
				/* . 
				"Origen de semills: " . $registro["origin"] . 
				"Descripción: " . $registro["description"] . 
				"C-millas restantes: " . $registro["quantity_left"] . 
				"Disponibles hasta: " . $registro["publication_end"] . 
				"Válidas hasta: " . $registro["valid_end"] . 
				"<BR>";*/
				/*"<a href:'local_plant.php?w_local_sow_id=" . $resultado['local_sow_id'] . "&w_business_id=" . $resultado['business_id'] . ">Seleccionar</a>*/

				$resultado->array('local_sow_id');

				echo "<br>";

		}
		
		// echo "Registro insertado";
		
		$resultado->closeCursor();
		
	}catch(Exception $e){
		
			die('Error: ' . $e->GetMessage());
		
	}
	
?>
<body/>
</html>