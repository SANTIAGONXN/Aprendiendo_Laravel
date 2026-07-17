@extends('layouts.app')

@section('contenido')
    <h1>Crear Departamento</h1>
    <form action="{{route('departamentos.store')}}" method="POST"> {{-- departamentos.store) es lo que se pone el controllador --}}
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombreDepa" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection