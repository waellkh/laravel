<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="page"><div class="page-header">
<h1 class="title">@yield('title')</h1> </div>
<ul class="nav-item active">
<li class="active"><a href="http://localhost:8080/laravel/laravel-6-brgin/server.php/dash"> Dashboarda</a></li>
<li><a href="http://localhost:8080/laravel/laravel-6-brgin/server.php/add">ADD new</a></li>
<li><a href="http://localhost:8080/laravel/laravel-6-brgin/server.php/show">show</a></li>
</ul>
	  </div>
<script src="js/bootstrap.min.js"></script>

<table class="table">
	<tr>
		<td>id</td>
		<td>name</td>
		<td>age</td>
		<td>somker</td>
		<td>Delete || edit</td>
</tr>
@yield('table')
</table>

      <form class="form-horizontal" action="" method="POST" >
<fieldset>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">name</label>  
  <div class="col-md-4">
  <input id="textinput" name="name" type="text" placeholder="name" value="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">age</label>  
  <div class="col-md-4">
  <input id="textinput" name="age" value=" " type="text" placeholder=null class="form-control input-md">  
  </div>
</div>





     	<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton" >click to edit</label>
  <div class="col-md-4">
    <button id="singlebutton" name="edit" class="btn btn-primary" >edit</button>
  </div>
</div>
</fieldset>
</form >
<table method="POST">


	</tr>


</table>
</body>
</html>