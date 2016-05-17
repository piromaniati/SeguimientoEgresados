<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro Universidades</title>
  <link rel="stylesheet" href="css/bootstrap-theme-darlky.css">
  <h1 align="center"><legend>Universidades</legend></h1>
</head>
<body>

	<form class="form-vertical">

  <fieldset>
    <br>
    <br>
    <div class="form-group">
      <label for="inputNombre" class="col-xs-4 control-label">Nombre de tu Universidad</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
      </div>
      <br>
    </div>
    <div class="form-group">
    <br>
      <label for="inputPassword" class="col-xs-4 control-label">Password</label>
      <div class="col-xs-4">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Recordarme <br>
            <br>
          </label>

        </div>
      </div>
    </div>
    <a href="{{url('/principal')}}" class="btn btn-primary">Registrarse</a>

</body>
</html>


