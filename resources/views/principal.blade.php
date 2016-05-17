<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
		<link rel="stylesheet" href="Login/css/style.css">
</head>
<body>

	<div class="wrapper">
	<div class="container">
		<h1>Bienvenido</h1>

		<form class="form">
			<input type="text" placeholder="Usuario">
			<input type="password" placeholder="Contraseña">
			<button type="submit" id="login-button">Acceder</button>
			<br>
			<br>
			<a href="{{url('/registro')}}" class="btn btn-success">Registro</a>
		</form>
	</div>
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>

</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="Login/js/index.js"></script>
</body>
</html>