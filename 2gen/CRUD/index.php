<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>

<?php

  include("conexion.php"); 

  $registros=$base->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ);

if(isset($_POST["cr"])){
  
  $Nom = $_POST["Nom"];

  $Ape = $_POST["Ape"];

  $Dir = $_POST["Dir"];

  $sql = "INSERT INTO datos_usuarios (Nombre, Apellido, Direccion) VALUES (:miNom, :miApe, :miDir)";

  $resultados = $base->prepare($sql);

  $resultados->execute(array(":miNom"=>$Nom, ":miApe"=>$Ape, ":miDir"=>$Dir));

  header("index.php");

}

?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
		<?php

      foreach($registros as $persona):

    ?>


       	<tr>
          <td><?php echo $persona->Id?> </td>
          <td><?php echo $persona->Nombre?></td>
          <td><?php echo $persona->Apellido?></td>
          <td><?php echo $persona->Direccion?></td>
     
          <td class="bot"><a href="borrar.php?Id=<?php echo $persona->Id?>"><input type='button' name='del' id='del' value='Borrar'></td>
          <td class='bot'><a href="editar.php?Id=<?php echo $persona->Id?> & nom=<?php echo $persona->Nombre?> & ape=<?php echo $persona->Apellido?> &  dir=<?php echo $persona->Direccion?>"> <input type='button' name='up' id='up' value='Actualizar'></a></td>
        </tr>       

      <?php

      endforeach; 

      ?>


	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
  </table>

</form>

<p>&nbsp;</p>
</body>
</html>