
@extends('layouts.master')
@section('title', 'Baja')

@section('content')

<h2 class="text-center">Dar de baja producto</h2>

<h4 class="text-center">Ingrese el código, nombre o ID del producto para dar de Baja</h4>
<h6 class="text-center">La eliminacion de su producto, puede ser por cualquiera de los medios en pantalla</h6>

<div class="container">
<div class="row  justify-content-center">
<div class="col-auto bg-light p-5">
<label for="inputCodigo" class="col-sm-10 col-form-label">Código</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputCodigo" placeholder="Codigo">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Nombre</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">ID</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputId" placeholder="ID">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Dar de baja</button>
</div>
</div>
</div>

@stop