<?php

use App\Http\Controllers\EmpleosController;
use App\Http\Controllers\ObservatorioLaboralController;
use Illuminate\Support\Facades\Route;
// Lo que hace es importar el controllador
use App\Http\Controllers\ProgramasController;

Route::get('/', function () {
    return view('index');
});

Route::get('quienes-somos', function () { //  quienes-somos es ruta en que le da clic el usuario.
    return view('nosotros'); // nosostros es el nombre de la vista. 
});
// ------------------------
//EMPLEABILIDAD:
// Ruta para redirigir al home del rol de Instrcutores 
Route::get('ingresInstruct', function () { 
    return view('empleabilidad/empleabilidadPrincipal'); 
});
// Ruta para redirigir hacia view de buscar empleo
Route::get('busque-empleo', function () { 
    return view('empleabilidad/busqueEmpleo'); 
});

//CERRAR SESIÓN
Route::get('inicio-login', function () { 
    return view('index'); 
});

//FORMACIÓN:
// Ruta para redirigir al home del rol de aprendices 
Route::get('ingresAprendiz', function () { 
    return view('formacion/formacionPrincipal'); 
});
// Ruta que redirige a la view de Aulas multiples. 
Route::get('aulas-moviles', function () { 
    return view('formacion/aulasMoviles'); 
});
// Ruta que redirige a la view de Biblioteca. 
Route::get('bibliotecas', function () { 
    return view('formacion/biblioteca'); 
});

// RUTAS PARA DIRIGIR A CONTROLLERS 
// ----------
// El nombre index es el nombre del metodo que se encuentra en el controller. 
// Este es un metodo para el controller. 
Route::get('/programas', [ProgramasController::class, 'index']) /* Lo que dice (/programas) es lo que se  muestra en la url al ejecutar la vista */
    ->name('programasActuales.index'); // -- Aqui es donde va el nombre que se pone el menu dentro del  "href" (donde da clic el usuario)

// Ruta para redirigir a view de Empleos/controller
Route::get('/empleos', [EmpleosController::class, 'index']) /* Lo que dice (/programas) es lo que se  muestra en la url al ejecutar la vista */
    ->name('empleosDisponibles.index');

// Ruta para redirigir a view de Observatorio Laboral/controller
Route::get('/Observatorio', [ObservatorioLaboralController::class, 'index']) 
    ->name('ObservatorioLaboral.index');
