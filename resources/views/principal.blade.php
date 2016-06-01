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
			<br>
			<br>
			<a href="{{url('/instituciones')}}" class="btn btn-success btn-lg active">  AccederInstitucion </a>
			<br>
			<br>
			<a href="{{url('/Egresados')}}" class="btn btn-success btn-lg active">  AccederEgresados </a>
			<br>
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