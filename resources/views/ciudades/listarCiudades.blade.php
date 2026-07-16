	@extends('layouts.app')

		@section('contenido')
			<h1>Lista de Ciudades</h1>
			<table class="table table-hover  mt-4 ">
				<thead>
					<tr>
						<th>Código ciudad</th>
						<th>Código departamento</th>
						<th>Nombre</th>
					</tr>
				</thead>
				<tbody>
					@foreach($ciudades as $unaciudad)
						<tr>
							<td>{{ $unaciudad->idCiudad }}</td>
							<td>{{ $unaciudad->iddepartamento}}</td>
							<td>{{ $unaciudad->nombre }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@endsection                   