<?php

namespace App\Http\Controllers;

use App\Models\departamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Consultar los departamentos y listarlos en a vista
        /* Return '¿Como vamos?'; */
        $departamentos = Departamentos::orderBy('nombre', 'ASC')->get();
        return view('departamentos/listarDepartamentos', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        /* return 'Amo el desarrollo de Softwareee..'; */
        return view('departamentos/crearDepartamentos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Eviar los datos del formulario a la base de datos 
        $departamento = new Departamentos();
        $departamento->nombre = $request->nombreDepa;
        $departamento->save();
        return redirect()->route('listarDepartamentos.index'); // listarDepartamentos.index es el nombre de una ruta, 
        //lo que estaria diciendo es (Usame esa ruta que ya estaba creada.) y esa ruta creada dirige a una vista. 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        /* return 'Hola mundo'; */
        // abrir la vista que tiene el formulario (prerellenado con los datos del departamento)
        $departamento = Departamentos::findOrFail($id);
        return view('departamentos/editarDepartamentos', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $departamento = Departamentos::findOrFail($id);
        $departamento->nombre = $request->nombreDepa;
        $departamento->save();
        return redirect()->route('listarDepartamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $departamento = Departamentos::findOrFail($id);
        $departamento->delete();
        return Redirect()->route('listarDepartamentos.index');
    }
}
