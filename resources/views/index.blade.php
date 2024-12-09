@extends('layouts.app')

@section('content')
<div>
    <h1>Lista de Estudiantes</h1>
    <a href="{{ route('estudiantes.create') }}">Crear Estudiante</a>

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
            <tr>
                <td>{{ $estudiante->codigo_estudiante }}</td>
                <td>{{ $estudiante->nombre }} {{ $estudiante->apellido }}</td>
                <td>{{ $estudiante->correo }}</td>
                <td>{{ $estudiante->telefono }}</td>
                <td>{{ $estudiante->estado ? 'Activo' : 'Inactivo' }}</td>
                <td>
                    <a href="{{ route('estudiantes.show', $estudiante) }}">Ver</a>
                    <a href="{{ route('estudiantes.edit', $estudiante) }}">Editar</a>
                    <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
