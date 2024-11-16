@extends('layouts.main')

@section('contenido')
<div class="container mt-4">
    <h2>Detalles del Proveedor</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $proveedor->id }}</p>
            <p><strong>Nombre:</strong> {{ $proveedor->nombre }}</p>
            <p><strong>Email:</strong> {{ $proveedor->email }}</p>
            <p><strong>Teléfono:</strong> {{ $proveedor->telefono }}</p>
            <p><strong>Dirección:</strong> {{ $proveedor->direccion }}</p>
            <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
