<!DICTYPE html>
<html>
<head>
	<title>Cierre de sesión</title>
	<meta charset="UTF-8">
	
</head>
<body>

<?php

	session_start(); /*V61,11:00 y 15:00*/
	session_destroy();
	
	header("location:login_form.php");

?>
<body/>
</html>

























