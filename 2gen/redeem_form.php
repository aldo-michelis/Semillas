<!DICTYPE html>
<html>
<head>
	<title>Verificación de Semillas para redimir</title>
	<meta charset="UTF-8">
</head>

<style>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<!-- Bootstrap core CSS -->
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
	<script>
  $( function() {
    $( "#Nacimiento" ).datepicker({
		dateFormat: 'yy-mm-dd',
    changeYear: true,
		yearRange: "-100:+0"
		});
  } );
  </script>

</style>
</head>


<body>
<h1> Verificación de Semillas para redimir</h1>

<form name="redeem_form" method="get" action="redeem_insert.php">

 <table> 
 
    <tr><td>Código de Semillas: </td><td><input type="text" name="w_redeem_code"></td></tr>
    <tr><td><input type="submit" value="Submit"></td></tr>

  </table>

</form>

</body>
</html>

























