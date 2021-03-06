<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro Egresados</title>
    <link rel="stylesheet" href="css/bootstrap-theme-darlky.css">
</head>
<body>
	<form class="form-horizontal">
 
  <fieldset>
  <br>
    <legend>Registro Para Egresados</legend>
    
    <div class="form-group">
      <label for="inputEmail" class=|"col-lg-2 control-label">Email</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="Password" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-6">
        <input type="password" class="form-control" id="Password" placeholder="Password">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Checkbox
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
      <div class="col-lg-6">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Radios</label>
      <div class="col-lg-6">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
            Option one is this
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something else
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Selects</label>
      <div class="col-lg-6">
        <select class="form-control" id="select">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <br>
        <select multiple="" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-6 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <a href="{{url('/principal')}}" class="btn btn-primary">Registrarse</a>
      </div>
    </div>
  </fieldset>
</form>
</body>
</html>