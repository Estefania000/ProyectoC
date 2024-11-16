@extends('layouts.main')

@section('contenido')
<div class="container mt-4">
    <h2>Detalles del Usuario</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $usuario->id }}</p>
            <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
            <p><strong>Email:</strong> {{ $usuario->email }}</p>
            <p><strong>Teléfono:</strong> {{ $usuario->telefono }}</p>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
