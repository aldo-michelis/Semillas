<!DICTYPE html>
<html>
<head>
	<title>Página Principal - Negocio</title>
	<meta charset="UTF-8">
</head>
<body>

	<?php

	session_start();

	if(!isset($_SESSION["usuario"])){

		header("location:login_form.php"); /*V60*/

	}
	?>

<h1>Bienvenidos a la aplicación para negocios</h1> <br> <br>


<a href="local_sow_form.php">Generar Semillas</a> <br>
<!--a href="sowed_un_cds.php">Generar Semillas Universales</a> <br-->
<a href="Gen_Pot.php">Generar Macetas</a> <br>

<body/>
</html>
