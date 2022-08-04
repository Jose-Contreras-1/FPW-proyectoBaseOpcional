@extends('layouts.master')
@section('title', 'Actualiza')

@section('content')

<body class="container">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Ingresar</h5>
        <div class="col-auto bg-light p-5">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Usuario</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputUsuario" placeholder="Usuario">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Password</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputPassword" placeholder="Password">
    <br><br><br><br><br><br>
  </div>
        </div>
        <p class="card-text">Ingrese porfavor su usuario y contraseña</p>
        <a href="#" class="btn btn-primary">Ingresar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Registrar</h5>
        <div class="col-auto bg-light p-5">
        <label for="inputCodigo" class="col-sm-10 col-form-label">Nombre</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Contraseña</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputContraseña" placeholder="********">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Rut</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputRut" placeholder="Rut">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Email</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputEmail" placeholder="@mail">
  </div>
        </div>
        <p class="card-text">Ingrese porfavor sus datos para registrarse</p>
        <a href="#" class="btn btn-primary">Registrar</a>
      </div>
    </div>
  </div>
</div><hr>




</body>





@stop