<!DICTYPE html>
<html>
<head>
	<title>Buscador de Semillas Locales</title>
	<meta charset="UTF-8">
</head>
<body>
<h1> Buscador de Semillas Locales</h1>

<?php

  session_start();
  
  if(!isset($_SESSION["usuario"])){
    
    header("location:login_form.php"); /*V60*/
    
  }

?>


<form name="sow_lc_cds_search_form" method="post" action="local_search_insert.php">
  Nombre del negocio: <input type="text" name="w_business_name"><br>
  Valor monetario de la C-milla: <input type="text" name="w_monetary_value"><br>
  Porcentaje de descuento máximo: <input type="text" name="w_percent_value"><br>
  Tipo de C-milla: <input type="text" name="w_type"><br> 
  Origen: <input type="text" name="w_origin"><br> //Nuevo, Reproductivo local, Reproductivo Universal
  Cantidad de C-millas restantes, menor a: <input type="text" name="w_quantity_left"><br>
  Disponibles hasta antes del: <input type="text" name="w_publication_end"><br>
  Vigencia de las C-millas hasta antes del: <input type="text" name="w_valid_end"><br>
  
  <input type="submit" value="Submit">
  
</form>

<body/>
</html>

























