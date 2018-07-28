<!DICTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<!-- Bootstrap core CSS -->
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">


</head>
<body class="text-center">
<h1 class="form-signin-headning"> Login</h1>

	<div class="container">


<form class="form-signin" action="login_validate.php" method="post">
	<div class="form-group row">
		<div class="col-3">
			<label for="login">Login:</label>
		</div>
		<div class="col-9">
	<input type="text" name="login">
</div>
</div>


<div class="form-group row">
	<div class="col-3">
		<label for="Password">Password:</label>
	</div>
	<div class="col-9">
		<input type="password" name="password">
	</div>
</div>
<div class="form-group row">
<div class="col-9">
	<button type="submit" name="enviar" class="btn btn-primary btn-block">Ingresar</button>
</div>
</div>
</form>
</div>
<body/>
</html>
