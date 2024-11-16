@extends('layouts.main')

@section('contenido')
<div class="container mt-4">
    <h2>Lista de Proveedores</h2>
    <a href="{{ route('proveedores.create') }}" class="btn btn-primary mb-3"><i class="fa-solid fa-circle-plus"></i> Agregar Proveedor</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($proveedores as $proveedor)
                <tr>
                    <td>{{ $proveedor->id }}</td>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->email }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->direccion }}</td>
                    <td>
                        <a href="{{ route('proveedores.show', $proveedor) }}" class="btn btn-info"><i class="fa-solid fa-list"></i> Mostrar</a>
                        <a href="{{ route('proveedores.edit', $proveedor) }}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i> Editar</a>
                        <form action="{{ route('proveedores.destroy', $proveedor) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" ><i class="fa-solid fa-trash-can"></i> Borrar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No hay proveedores registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{ $proveedores->links() }}
    </div>
</div>
@endsection
