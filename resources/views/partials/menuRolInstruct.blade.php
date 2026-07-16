<nav>
    <ul>
        <h4>Este es el menu de isntructores </h4>
        <li><a href="{{ route('empleosDisponibles.index') }}">Busque Empelo</a></li>
        {{--  <li><a href="busque-empleo">Busque Empelo</a></li> --}}
        {{-- <li><a href="observatorio-laboral"> Observatorio laboral</a></li> --}}
        <li><a href="{{ route('ObservatorioLaboral.index') }}">Observatorio laboral</a></li>
        <li><a href="{{ route('listarDepartamentos.index') }}">Listar Departamentos</a></li> {{-- Esa es la ruta para llamar a un controller --}}
        <li><a href="{{ route('listarCiudades.index') }}">Listar Ciudades</a></li> {{-- Esa es la ruta para llamar a un controller --}}
        <li><a href="{{ route('listarEmpleados.index') }}">Listar Empleados</a></li> {{-- Esa es la ruta para llamar a un controller --}}
    </ul>
</nav>
