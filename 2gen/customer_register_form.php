<!DICTYPE html>
<html>
<head>
	<title>Registro de Usuarios</title>
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
<h1> Registro de Usuarios</h1>


        <form action="customer_register_insert.php" method="post">
        <table><tr>
			 <td>Nombre</td><td><input type="text" name="w_customer_name" id="Nombre"></td></tr>
           <tr>
             <td>Apellidos </td>
			 <td><input type="text" name="w_customer_last_name" id="Apellidos"></td></tr>
           <tr>
             <td>Celular o E-mail</td>
             <td><input type="text" name="w_customer_username" id="Username"></td>
           </tr>
           <tr>
             <td>Contraseña</td>
             <td><input type="text" name="w_customer_password" id="Password"></td>
           </tr>
           <tr>
             <td>Confirma contraseña </td>
             <td><input type="text" name="w_customer_passwordConf" id="ConfPassword"></td>
           </tr>
           <tr>
             <td>Fecha de nacimiento</td>
             <td><input type="text" name="w_customer_birth" id="Nacimiento"></td>
           </tr>
           <tr>
             <td>Genero</td>
             <td><input type="text" name="w_gender" id="Género"></td>
           </tr>
           <tr>
             <td>Ubicación</td>
             <td><input type="text" name="w_customer_locaton" id="Ubicación"></td>
           </tr>
           <tr>
           <tr><td colspan="2"> <input type="submit" name="enviando" value="¡Dale!">
        </td></tr></table>
        </form>

<body/>
</html>

























