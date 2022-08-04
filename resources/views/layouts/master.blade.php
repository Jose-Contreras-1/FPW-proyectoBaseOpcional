<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
  <nav class="navbar navbar-expand-lg bg-light col-lg-12">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a aria-current="page" class="nav-link active" href="/home">Software CLEAN 1.0</a>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/actualiza">Actualizar</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/asignacion">Asignar</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/consulta">Consultar</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/baja">Borrar</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/categoria">Categorias</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/sucursal">Sucursales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/registro">Registrar</a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/login">Logear</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/registrarse">Registrarse</a>
        </li>
        <form class="d-flex">
        <input class="form-control" type="buscar" id="inputBuscar" placeholder="buscar" aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>

      </ul>
    </div>
  </div>
</nav>

   
  @section('header')
        <hr>
        </div>
  @show

    <div class="container">
        @yield('content')
    </div>

  @section('footer')
        
        <h5 class="text-center">Distribuidora de Artículos de Aseo "El Limpiazo"</h5>
        <h6 class="text-center">Todos los derechos reservados</h6>

  @show

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>