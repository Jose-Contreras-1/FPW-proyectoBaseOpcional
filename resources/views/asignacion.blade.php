
@extends('layouts.master')
@section('title', 'Asignación')

@section('content')

<meta charset="UTF-8"/>

<h2 class="text-center">Asignación de productos a las sucursales</h2>

<div class="container">
<div class="row  justify-content-center">
<div class="col-auto bg-light p-5">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Código</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputCodigo" placeholder="Código">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Nombre</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputNombre" placeholder="Precio">
  </div>
  </div>
</div><hr>

  <h2 class="text-center">Cantidad de productos a cada Sucursal</h2>

  <div class="container">
<div class="row  justify-content-center">
<div class="col-auto bg-light p-5">
    <label for="inputCodigo" class="col-sm-10 col-form-label">Sucursal Playa Blanca</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputLaSerena" min="0" placeholder="Serena">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Sucursal El Corralero</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputCurico" min="0" placeholder="Curico">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Sucursal Campo Lindo</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputOsorno" min="0" placeholder="Osorno">
  </div>
  </div>
</div>
  
 @stop