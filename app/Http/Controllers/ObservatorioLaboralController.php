<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObservatorioLaboralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $observLaboral = [
            ['opcion' => 'COUC'],
            ['opcion' => 'Nuevos proyectos de inversión '],
            ['opcion' => 'Tendencia de las ocupaciones'],
            ['opcion' => 'Programas más sobresalientes del SENA'],
            ['opcion' => 'Buscador de ocupaciones'],
            ['opcion' => 'Cifras regionales del mercado laboral']
        ];
        return view ('empleabilidad/observatorioLAboral',['obsrvatorio' =>$observLaboral]);
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
