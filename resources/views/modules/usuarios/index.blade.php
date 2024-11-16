@extends('layouts.main')

@section('contenido')
<div class="container mt-4">
    <h2>Lista de Usuarios</h2>
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary mt-3"><i class="fa-solid fa-circle-plus"></i> Agregar Usuario</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->telefono }}</td>
                    <td>
                        
                        <a href="{{ route('usuarios.show', $usuario) }}" class="btn btn-info">Mostrar</a>
                    
                        
                        <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i> Editar</a>
                        
                        
                        <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" ><i class="fa-solid fa-trash-can"></i> Borrar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No hay usuarios registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{ $usuarios->links() }}
    </div>
</div>
@endsection
