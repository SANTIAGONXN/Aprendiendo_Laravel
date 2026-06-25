@extends('layouts.homeInstruct')
@section('contenido')
    <a href="ingresInstruct"><button>Volver al Home</button></a>
    <h5>Hola Bienvenido a la pagina de BUSCAR EMPELOS</h5>
    <h6>Estos son los empleos disponibles actualmente: </h6>
    <p>- 1. Administrador de empresas</p>
    <p>- 2. Gestor Comercial</p>

    @forelse ($empleos as $dato)
        <p>{{ $dato['nombre'] }}</p>
    @empty
        <p>No existen ofertas</p>
    @endforelse

@endsection
