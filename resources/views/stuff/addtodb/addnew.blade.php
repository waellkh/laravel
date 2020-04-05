@extends('stuff.dash')



@section('title','add new here');

<form class="form-horizontal" action="http://localhost:8080/laravel/laravel-6-brgin/server.php/store" method="POST" >
<fieldset>
@csrf
<div class="form-group">

  <label class="col-md-4 control-label" for="textinput">name</label>  
  <div class="col-md-4">
  <input id="textinput" name="name" type="text" placeholder="" value="" class="form-control input-md">
  <p style="color:red">@error('name')  {{$message}}  @enderror</p>
  </div>
</div>






     	<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton" >click to edit</label>
  <div class="col-md-4">
    <button id="singlebutton" name="edit" class="btn btn-primary" >add</button>
  </div>
</div>
</fieldset>
</form >