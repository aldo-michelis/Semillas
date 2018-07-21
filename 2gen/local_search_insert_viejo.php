<!DICTYPE html>
<html>
<head>
	<title>Búsqueda de Semillas Locales</title>
	<meta charset="UTF-8">
</head>
<body>

<?php
	// session_start();
	
	// if(!isset($_SESSION["w_customer_username"])){
		
		// header("location:login_proced.php"); /*V60*/
		
	// }

	
	$VAL2=$_GET["w_type"];
	$VAL3=$_GET["w_monetary_value"];
	$VAL4=$_GET["w_percent_value"];
	$VAL5=$_GET["w_description"];
	//$VAL6=$_GET[""];
	$VAL7=$_GET["w_quantity_left"];
	//$VAL8=$_GET["w_publication_start"];
	//$VAL9=$_GET["w_publication_end"];
	//$VAL10=$_GET["w_valid_start"];
	$VAL11=$_GET["w_valid_end"];
	$VAL12=$_GET["w_business_id"];

	try{
	
		$base=new PDO('mysql:host=localhost; dbname=cmillas', 'root', '');

		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$base->exec("SET CHARACTER SET utf8");				
	
		$sql="SELECT 
						type,
						monetary_value,
						percent_value,
						description,
						quantity_start,
						quantity_left,
						publication_start,
						publication_end,
						valid_start,
						valid_end,
						business_id
						
					FROM local_sow

					WHERE
						type = :1 OR
						// monetary_value = :2 OR
						// percent_value = :3 OR
						// description = :4 OR
						// quantity_left = :5 OR
						// valid_end = :6 OR
						// business_id = :7
					";
					
		$resultado=$base->prepare($sql);
		
		$resultado->execute(array(
			":1"=>$VAL2,
			":2"=>$VAL3,
			":3"=>$VAL4,
			":4"=>$VAL5,
			":5"=>$VAL7,
			":6"=>$VAL11,
			":7"=>$VAL12
		));

		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

			echo $registro['type'];
			echo $registro['monetary_value'];
			echo $registro['percent_value'];
			echo $registro['quantity_start'];
			echo $registro['quantity_start'];
			echo $registro['publication_start'];
			echo $registro['publication_end'];
			echo $registro['valid_start'];
			echo $registro['valid_end'];
			echo $registro['business_id'];

		}	
			
			$resultado->closeCursor();
			
					

	}catch(Exception $e){
			
				die('Error: ' . $e->GetMessage());
			
		}
	
	
	
	
	
	
	
	
		// echo "<table><tr><td>";
		// echo "<a href='sow_lc_cds_plant.php'>" . $fila[$fld1] . "</a>" . "</td><td>";
		// echo $fila[$fld2] . "</td><td>";
		// echo $fila[$fld3] . "</td><td>";
		// echo $fila[$fld4] . "</td><td>";
		// echo $fila[$fld5] . "</td><td>";
		// echo $fila[$fld7] . "</td><td>";
		// echo $fila[$fld9] . "</td><td>";
		// echo $fila[$fld10] . "</td><td>";
		// echo $fila[$fld11] . "</td><td>";
		// echo $fila[$fld12] . "</td><td>";
		// echo "<a href='sow_lc_cds_plant.php?w_sow_lc_cds_id=$fila[$fld1]&w_business_id=$fila[$fld12]'>Seleccionar</a></td></tr></table>";
		echo "<input type='submit' value='Seleciconar' onclick=msg()></td></tr></table>";
	// }
	
	// function msg(){
		
		// echo "SELECCIONASTE!";
		
	// }
	
	// if($resultados==false) {
		
			// echo "Error la consulta";
			
	// } else{
		
			// echo "Registro guardado";
			
	// }
	
	// mysqli_close($conexion);
	
?>

<br>
	<a href="http://localhost/c-millas/lc_cds_select.php">  Seleccionar</a>;

<br>
<br>
<a href="Index_Business.html" name="Volver al Menú Principal">Volver al Menú Principal</a>

<body/>
</html>