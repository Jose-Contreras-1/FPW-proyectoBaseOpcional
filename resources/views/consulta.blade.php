
@extends('layouts.master')
@section('title', 'Consulta')

@section('content')

<h2 class="text-center">Consulta de Productos</h2>

<div class="container">
<div class="row  justify-content-center">
<div class="col-auto bg-light p-5">
<fieldset class="row mb-3">
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          Código
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Nombre
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Sucursal
        </label>
      </div>
    </div>
  </fieldset>
  </div>
</div>
</div><hr>

<br><h2 class="text-center">Búsqueda</h2><br>

<div class="container">
<div class="row  justify-content-center">
  <div class="col-auto bg-light p-5">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Código</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputCodigo" placeholder="Código">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Nombre</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Sucursal</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputSucursal" placeholder="Sucursal">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</div>
  </div>

  @stop