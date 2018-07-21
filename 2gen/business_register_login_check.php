<!DICTYPE html>
<html>
<head>
	<title>Registro de Usuarios</title>
	<meta charset="UTF-8">
</head>

<?php

	session_start();
	
	if(!isset($_SESSION["usuario"])){
		
		echo "Para registrar un negocio, necesitas acceder con una cuenta de usuario <br>";
		echo "Si ya tienes una cuenta, accede <a href='login_form.php'>Aquí </a><br>";
		echo "Si aún no cuentas con una cuenta, regístrate " . "<a href='customer_register_form.php'>Aquí </a><br>";

		// header("location:login_form.php"); /*V60*/
		

	}else {

		header("location:business_register_form.php");

	}

?>

</html>

























