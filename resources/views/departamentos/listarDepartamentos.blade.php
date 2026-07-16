	@extends('layouts.app')

		@section('contenido')
			<h1>Lista de Departamentos</h1>
			<table class="table table-hover  mt-4 ">
				<thead>
					<tr>
						<th>Código</th>
						<th>Nombre</th>
					</tr>
				</thead>
				<tbody>
					@foreach($departamentos as $undepartamento)
						<tr>
							<td>{{ $undepartamento->idDepartamento }}</td>
							<td>{{ $undepartamento->nombre }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@endsection                   