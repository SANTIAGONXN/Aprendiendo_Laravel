<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('quienes-somos', function () { //  quienes-somos es ruta en que le da clic el usuario.
    return view('nosotros'); // nosostros es el nombre de la vista. 
});
Route::get('ofertas', function () { 
    return view('ofertas'); 
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
// Ruta para redirigir a view de Observatorio Laboral
Route::get('observatorio-laboral', function () { 
    return view('empleabilidad/observatorioLaboral'); 
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




