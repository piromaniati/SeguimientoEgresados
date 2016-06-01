<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro Universidades</title>
  <br>
  <br>
  <link rel="stylesheet" href="css/bootstrap-theme-darlky.css">
  <h1 align="center"><legend>Registro Universidades</legend></h1>
</head>
<body>

	<form class="form-vertical">
  <div class="container">
  <fieldset>
    <br>
    <br>
    <div class="form-group">
      <label for="inputNombre" class="col-xs-8 control-label">Nombre Universidad</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
      </div>
      <br>
    </div>
    <br>
    <br>
    <div class="form-group">
      <label for="inputDireccion" class="col-xs-8 control-label">Direccion</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="inputDireccion" placeholder="Direccion">
      </div>
      <br>
    </div>
    <br>
    <br>
    <div class="form-group">
      <label for="inputPassword" class="col-xs-8 control-label">Password</label>
      <div class="col-xs-8">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
      <label>
      <br>
        <a href="{{url('/principal')}}" class="btn btn-primary">Registrarse</a>
         <br>
        <br>
      </label>
        </div>
      </div>
    </div>
    </div>
</body>
</html>


