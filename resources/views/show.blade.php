@extends('layouts.app')

@section('content')
    <h1>Detalles del Estudiante</h1>
    <p><strong>Código:</strong> {{ $estudiante->codigo_estudiante }}</p>
    <p><strong>Nombre:</strong> {{ $estudiante->nombre }}</p>
    <p><strong>Apellido:</strong> {{ $estudiante->apellido }}</p>
    <p><strong>Dirección:</strong> {{ $estudiante->direccion }}</p>
    <p><strong>Correo:</strong> {{ $estudiante->correo }}</p>
    <p><strong>Teléfono:</strong> {{ $estudiante->telefono }}</p>
    <p><strong>Estado:</strong> {{ $estudiante->estado ? 'Activo' : 'Inactivo' }}</p>

    <a href="{{ route('estudiantes.index') }}">Volver al listado</a>
@endsection
