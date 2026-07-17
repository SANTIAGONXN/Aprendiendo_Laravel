@extends('layouts.app')

@section('contenido')

    <h1>Bienvenido a la pagina de OFERTAS</h1>
    <p>Esta es la pagina de ofertas </p>

    @forelse ($programas as $dato)
        <p>{{ $dato['nameEmpleo'] }}</p>
    @empty
        <p>No existen ofertas</p>
    @endforelse
    
@endsection
