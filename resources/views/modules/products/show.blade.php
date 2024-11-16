@extends('layouts/main')


@section('contenido')
<div class="container mt-4">
<h2>Mostrar la información de: {{$item->nombre}}</h2>
<div class="row">
    <div class="col">

        <div class="card">
        <div class="card-body">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->descripcion}}</td>
                        <td>{{$item->cantidad}}</td>
                        
                    </tr>
                </tbody>

            </table>
            <a href="{{route('index')}}" class="btn btn-secondary mt-4">Cancelar</a>

        
            </div>
        </div>
        </div>
    </div>
    </div>

@endsection