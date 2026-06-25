<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $empleosDispo = [
            ['nombre'=> 'Desarrollador de Software'],
            ['nombre'=> 'Administrador de empresas'],
            ['nombre'=> 'Ingeniero en sistemas'],
            ['nombre'=> 'Ingeniero Ambiental']
        ];
        return view ('empleabilidad/busqueEmpleo',['empleos' =>$empleosDispo]);// Lo que dice empleos es la variable que va dentro de la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
