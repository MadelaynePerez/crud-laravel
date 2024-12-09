@extends('layouts.app')

@section('content')
    <h1>Editar Estudiante</h1>
    <form action="{{ route('estudiantes.update', $estudiante->codigo_estudiante) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $estudiante->nombre) }}" required>
            @error('nombre')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value="{{ old('apellido', $estudiante->apellido) }}" required>
            @error('apellido')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" value="{{ old('direccion', $estudiante->direccion) }}" required>
            @error('direccion')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" value="{{ old('correo', $estudiante->correo) }}" required>
            @error('correo')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" value="{{ old('telefono', $estudiante->telefono) }}" required>
            @error('telefono')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="estado">Estado:</label>
            <select id="estado" name="estado" required>
                <option value="1" {{ old('estado', $estudiante->estado) == 1 ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ old('estado', $estudiante->estado) == 0 ? 'selected' : '' }}>Inactivo</option>
            </select>
            @error('estado')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Actualizar Estudiante</button>
    </form>
@endsection
