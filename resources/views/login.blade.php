
  @extends('layouts.master')
  @section('title', 'Login')
  
  @section('content')
  <meta charset="UTF-8"/>

  <h2 class="text-center">Ingrese su usuario y contraseña</h2>

  <div class="container">
<div class="row  justify-content-center">
  <div class="col-auto bg-light p-5">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Usuario</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputUsuario" placeholder="Usuario">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Password</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputPassword" placeholder="Password">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Ingresar</button>
    </div>
</div>
  </div>

    @stop