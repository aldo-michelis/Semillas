

<!DICTYPE html>
<html>
<head>
	<title>Página Principal - Usuario</title>
	<meta charset="UTF-8">
</head>

<?php

	session_start();
	
	if(!isset($_SESSION["usuario"])){
		
		header("location:login_form.php"); /*V60*/
		
	}

?>

<body>
<h1>Aplicación para usuarios</h1> <br> <br>

<?php

	echo "Bienvenido " . $_SESSION["usuario"] . " Tu número de ID es: " . $_SESSION["s_customer_id"] . "<br><br>";

?>

<a href="local_search_form.php">Buscar Semillas</a> <br>
<a href="Gen_UnCds.php">Buscar Macetas</a> <br>
<a href="business_register_form.php">Registrar tu negocio</a><br><br>
<a href="close_session.php">Cerrar sesión</a><br><br>


<body/>
</html>

























