@extends('layouts.homeInstruct')
@section('contenido')
    <a href="ingresInstruct"><button>Volver al Home</button></a>
    <h4>Benbenido a la pagina de Observatorio Laborall</h4>
    <p>¿Estas preparad@ para probar todo lo queteenmos para tii?</p>

    @forelse ($obsrvatorio as $dato)
        <p>{{ $dato['opcion'] }}</p>

    @empty
        <p>No Existen Observataorios</p>
    @endforelse
@endsection