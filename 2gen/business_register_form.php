<!DICTYPE html>
<html>
<head>
	<title>Registro de Usuarios</title>
	<meta charset="UTF-8">
</head>

<?php

	session_start();
	
	if(!isset($_SESSION["usuario"])){

		header("location:business_register_login_check.php"); /*V60*/
		
	}

?>

<style>

	h1{text-align:center;
	}
	
	table{
		with:25%;
		background-colour:#FFC;
		border: 2px dotted #F00;
		margin:auto;}
		
		.izq{text-align:left;
		}
		
		.der{text-align:right;
		}
		
		td{
			padding:10px;
		}
		
</style>

<body>
<h1> Registro de Negocios</h1>


        <form action="business_register_insert.php" method="post">
        <table>
			<tr><td>Nombre de la Empresa</td><td><input type="text" name="w_business_name" id="Nombre"></td></tr>
			<tr><td>Sector </td><td><input type="text" name="w_sector" id="Sector"></td></tr>
			<tr><td>Segmento </td><td><input type="text" name="w_segment" id="Segmento"></td></tr>
			<tr><td>Giro </td><td><input type="text" name="w_subsegment" id="Giro"></td></tr>
			<tr><td>País</td><td><input type="text" name="w_business_location" id="Pais"></td></tr>
			<tr><td>Código Postal</td><td><input type="text" name="w_business_zipcode" id="CP"></td></tr>
			<tr><td>Número de sucursales (en este país)</td><td><input type="text" name="w_branches_number" id="Nombre"></td></tr>
			<tr><td>Opera también en otro país</td><td><input type="text" name="w_operations_abroad" id="CP"></td></tr>
			  
			<tr><td>Para registrar tu negocio </td></tr>
			<tr><td>necesitas una cuenta de cliente.</td></tr>
			<tr><td><a name="w_nuevo=SI" href="customer_register_form.php">Regístrate para obtener una</a></td></tr>
			<tr><td>o accede con tus datos de usuario:</td></tr>
			
			<tr><td>E_mail o celular (usuario) </td><td><input type="text" name="w_customer_id" id="ConfPassword"></td></tr>
			<tr><td>Contraseña</td><td><input type="text" name="w_customer_birth" id="w_customer_password"></td></tr>

			<tr><td><input type="submit" value="Submit"></td></tr>

			
		</table>
        </form>

<body/>
</html>

























