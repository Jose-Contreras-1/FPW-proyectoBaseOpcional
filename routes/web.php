<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\ActualizaController;
use App\Http\Controllers\BajaController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\RegistrarseController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\welcomeController;


Route::get('/', [homeController::class, 'index'], function(){
    return view('home');
});

Route::get('/home', [homeController::class, 'index'], function(){
    return view('home');
});

Route::get('/registro', [RegistroController::class, 'index'], function(){
    return view('registro');
});

Route::get('/registrarse', [RegistrarseController::class, 'index'], function(){
    return view('registrarse');
});

Route::get('/asignacion', [AsignacionController::class, 'index'], function(){
    return view('asignacion');
});

Route::get('/consulta', [ConsultaController::class, 'index'], function(){
    return view('consulta');
});

Route::get('/baja', [BajaController::class, 'index'], function(){
    return view('baja');
});

Route::get('/actualiza', [ActualizaController::class, 'index'], function(){
    return view('actualiza');
});

Route::get('/login', [LoginController::class, 'index'], function(){
    return view('login');
});

Route::get('/categoria', [CategoriaController::class, 'index'], function(){
    return view('categoria');
});

Route::get('/sucursal', [SucursalController::class, 'index'], function(){
    return view('sucursal');
});

Route::get('/welcome', [welcomeController::class, 'index'], function(){
    return view('welcome');
});