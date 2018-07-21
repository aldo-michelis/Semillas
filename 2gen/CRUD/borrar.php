<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

  include("conexion.php");

  $Id=$_GET["Id"];

  try {

    $base->query("DELETE FROM datos_usuarios WHERE Id='$Id'");

    header("location:index.php");

  } catch (Exception $e) {

  echo "Error en la línea: " . $e->getLine() . "<br>";
  die('Hubo error: ' . $e->getMessage());
  
  }
?>


</body>
</html>