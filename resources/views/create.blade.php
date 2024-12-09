@extends('layouts.app')

@section('content')
    <h1>Crear Estudiante</h1>
    <form action="{{ route('estudiantes.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
            @error('nombre')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value="{{ old('apellido') }}" required>
            @error('apellido')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" value="{{ old('direccion') }}" required>
            @error('direccion')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" value="{{ old('correo') }}" required>
            @error('correo')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}" required>
            @error('telefono')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="estado">Estado:</label>
            <select id="estado" name="estado" required>
                <option value="1" {{ old('estado') == 1 ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ old('estado') == 0 ? 'selected' : '' }}>Inactivo</option>
            </select>
            @error('estado')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Crear Estudiante</button>
    </form>
@endsection
