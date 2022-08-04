
@extends('layouts.master')
@section('title', 'Actualiza')

@section('content')
 
<h2 class="text-center">Actualizar un producto</h2>

<h4 class="text-center">Ingrese el código del producto para actualizar</h4>

<div class="container">
<div class="row  justify-content-center">
  <div class="col-auto bg-light p-5">
    <div>
    <label for="inputCodigo" class="col-sm-2 col-form-label">Código</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputCodigo" placeholder="Codigo">
  </div><br>
  <button type="submit" class="btn btn-primary">Ingresar</button>
    </div>
  </div>
</div><hr>

  <h2 class="text-center">Actualizar</h2> 

  <div class="container">
<div class="row  justify-content-center">
  <div class="col-auto bg-light p-5">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Nombre</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Precio de venta</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputPrecio" min="0" placeholder="Precio">
  </div>
  <div class="mb-3">
    <label for="inputCodigo" class="col-sm-10 col-form-label">Descripción</label>
    <textarea name="descripcion" class="form-control" cols="30" rows="10" id="inputDescripcion" placeholder="Descripcion"></textarea>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
</div>
  </div>
 
  @stop