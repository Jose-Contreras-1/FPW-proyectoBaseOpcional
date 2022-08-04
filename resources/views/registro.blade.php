@extends('layouts.master')
@section('title', 'Registro')
  
@section('content')

<h2 class="text-center">Registro de productos</h2>

<div class="container">
<div class="row  justify-content-center">
  <div class="col-auto bg-light p-5">
    <label for="inputCodigo" class="col-sm-2 col-form-label">ID</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputId" placeholder="id">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Código</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputCodigo" min="0" placeholder="Código">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Nombre</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Categoría</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputCategoria" placeholder="Categoría">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Nombre de sucursal</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputSucursal" placeholder="Sucursal">
  </div>
  <div class="mb-3">
    <label for="inputCodigo" class="col-sm-10 col-form-label">Descripción</label>
    <textarea name="descripcion" class="form-control" cols="30" rows="10" id="inputDescripcion" placeholder="Descripcion"></textarea>
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Cantidad</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputCantidad" min="0" placeholder="Cantidad">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Precio de venta</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputPrecio" min="0" placeholder="Precio">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Registrar producto</button>
    </div>
</div>
  </div>
  
  @stop