@extends('layouts.main')

@section('contenido')
<div class="container mt-4">
    <h2>Editar Proveedor</h2>
    <form action="{{ route('proveedores.update', $proveedor) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ $proveedor->nombre }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" value="{{ $proveedor->email }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" name="telefono" id="telefono" value="{{ $proveedor->telefono }}" class="form-control">
        </div>
        <div class="mb-3">
        
