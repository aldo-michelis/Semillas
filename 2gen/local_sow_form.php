<!DICTYPE html>
<html>
<head>
	<title>Generador de Semillas Locales</title>
	<meta charset="UTF-8">
</head>

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
<h1> Generador de Semillas Locales</h1>

<form name="local_sow_form" method="get" action="local_sow_insert.php">

 <table> 
 
    <tr><td>Tipo de C-milla: </td><td><input type="text" name="w_type"></td></tr>
    <tr><td>Valor monetario de la C-milla: </td><td><input type="text" name="w_monetary_value"></td></tr>
    <tr><td>Porcentaje de descuento: </td><td><input type="text" name="w_percent_value"></td></tr>
    <tr><td>Descripción de la promoción: </td><td><input type="text" name="w_description"></td></tr>
    <tr><td>Cantidad de C-millas: </td><td><input type="text" name="w_quantity_start"></td></tr>
    <tr><td>Publicar desde: </td><td><input type="text" name="w_publication_start"></td></tr>
    <tr><td>Publicar hasta: </td><td><input type="text" name="w_publication_end"></td></tr>
    <tr><td>Vigencia desde: </td><td><input type="text" name="w_valid_start"></td></tr>
    <tr><td>Vigencia hasta: </td><td><input type="text" name="w_valid_end"></td></tr>

    <tr><td><input type="submit" value="Submit"></td></tr>

  </table>

</form>

</body>
</html>

























