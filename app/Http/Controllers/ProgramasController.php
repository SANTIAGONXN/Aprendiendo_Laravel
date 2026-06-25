<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramasController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // ESTA ES LA FUNCIÓN PARA MOSTRAR LOS PROGRAMAS
    public function index()
    {
        //Envia dotos en una vista para listar los programas
        $ofertaprogramas = [
            ['nameEmpleo'=> 'Analisis y Desarrollo de Software'],
            ['nameEmpleo'=> 'Gestion de Mercadeos'],
            ['nameEmpleo'=> 'Redes y Cableado'],
            ['nameEmpleo'=> 'Gestion Contable Y Financiera']
        ];
        return view ('ofertas',['programas' =>$ofertaprogramas]);
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
