<!DICTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">

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
			text-align:center;
			padding:10px;
		}
		
</style>
	
</head>
<body>
<h1> Login</h>


<form action="login_validate.php" method="post">
	
	<table>
	<tr>
	<td class="izq">
	Login:</td><td class="der"><input type="text" name="login"></td></tr>
	<tr><td class="izq">Password:</td> <td class="der"><input type="password" name="password"> </td></tr>
	<tr><td colspan="2"><input type="submit" name="enviar" value="Login" </td></tr>
	</table>
  
</form>

<body/>
</html>

























