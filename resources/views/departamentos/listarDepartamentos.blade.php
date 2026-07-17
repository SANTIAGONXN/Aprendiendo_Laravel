 @extends('layouts.app')

 @section('contenido')
     <h1>Lista de Departamentos</h1>
     <a class="btn btn-primary" href="{{ route('departamentos.create') }}"> Crear Departamentos</a>
     <table class="table table-hover  mt-4 ">
         <thead>
             <tr>
                 <th>Código</th>
                 <th>Nombre</th>
                 <th>Acciones</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($departamentos as $undepartamento)
                 <tr>
                     <td>{{ $undepartamento->idDepartamento }}</td>
                     <td>{{ $undepartamento->nombre }}</td>
                     <td>
                         <a class="btn btn-primary"
                             href="{{ route('departamentos.edit', $undepartamento->idDepartamento) }}">Editar</a>
                         <form action="{{ route('departamenos.destroy', $undepartamento->idDepartamento) }}" method="POST">
                             @csrf
                             @method('DELETE')
                             <button class="btn btn-sm btn-danger" type="submit"
                                 onclick="return confirm('¿Estas seguro que desea eliminar ese departamento?')">Eliminar</button>
                         </form>
                     </td>

                 </tr>
             @endforeach
         </tbody>
     </table>
 @endsection
