@extends('layouts.master')
@section('title', 'Categoria')
  
@section('content')

<h2 class="text-center">Categoria de productos</h2>

<div class="container">
<div class="row  justify-content-center">
  <div class="col-auto bg-light p-5">
    <label for="inputCodigo" class="col-sm-2 col-form-label">ID</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputId" placeholder="id">
  </div>
  <label for="inputCodigo" class="col-sm-10 col-form-label">Nombre</label>
  <div class="col-sm-50">
    <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
  </div>
  <div class="mb-3">
    <label for="inputCodigo" class="col-sm-10 col-form-label">Descripción</label>
    <textarea name="descripcion" class="form-control" cols="30" rows="10" id="inputDescripcion" placeholder="Descripcion"></textarea>
  </div>
  <br>
    </div>
</div>
  </div>


  @stop