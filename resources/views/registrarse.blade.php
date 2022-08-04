@extends('layouts.master')
@section('title', 'Registro')
  
@section('content')

<h2 class="text-center">Ingrese sus datos para registrarse</h2>

<div class="container">
<div class="row  justify-content-center">
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
  <br>
  <button type="submit" class="btn btn-primary">Registrar producto</button>
    </div>
</div>
  </div>
  
  @stop