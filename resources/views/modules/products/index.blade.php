@extends('layouts/main')


@section('contenido')
   
    <div class="container mt-4">
<h2>Crud proyecto - Productos</h2>
<div class="row">
    <div class="col">
        <div class="card">
        <div class="card-body">
            <a href="{{route('create')}}" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> Agregar Producto
            </a>
            <hr>
        <table class="table table-sm table-bordered text-center">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        
        
            <tbody>
                @forelse ($items as $item)
                    
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>{{$item->cantidad}}</td>
                    <td>
<form action="{{ route('destroy', $item->id) }}" method="post">
            @csrf
            @method('DELETE')
    <a href="{{ route('show', $item->id) }}" class="btn btn-info"><i class="fa-solid fa-list"></i> Mostrar</a>

    <a href="{{route('edit', $item->id)}}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i> Editar</a>
    
    <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Borrar</button>
</form>
</td>
                </tr>
                @empty
                <tr>
                    <td>No hay datos en la tabla...</td>
                </tr>
                @endforelse
                
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{$items->links()}}
        </div>

    </div>

        </div>
      </div>
    </div>
    </div>

@endsection