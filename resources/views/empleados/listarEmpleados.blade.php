	@extends('layouts.app')

		@section('contenido')
			<h1>Lista de Empleados</h1>
			<table class="table table-hover  mt-4 ">
				<thead>
					<tr>
						<th>Código de empleado</th>
						<th>Código de departamento</th>
						<th>Código de la ciudad</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Dirreccion</th>
						<th>Email</th>
						<th>Estado</th>
						<th>Fecha ingreso</th>
						<th>Fecha retiro</th>
						<th>Sueldo</th>
					</tr>
				</thead>
				<tbody>
					@foreach($empleados as $unempleado)
						<tr>
							<td>{{ $unempleado->idEmpleado }}</td>
							<td>{{ $unempleado->iddepartamento}}</td>
							<td>{{ $unempleado->idciudad}}</td>
							<td>{{ $unempleado->nombre }}</td>
							<td>{{ $unempleado->apellido }}</td>
							<td>{{ $unempleado->direccion}}</td>
							<td>{{ $unempleado->email}}</td>
							<td>{{ $unempleado->estado }}</td>
							<td>{{ $unempleado->fechaingreso }}</td>
							<td>{{ $unempleado->fecharetiro }}</td>
							<td>{{ $unempleado->sueldo }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@endsection                   