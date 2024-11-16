@extends('layouts/main')
@section('contenido')
<div class="container mt-4">
<h2>Agregar nuevo producto</h2>
<div class="row">
    <div class="col">

        <div class="card">
        <div class="card-body">
            
            <form action="{{route('store')}}" method="post">
                @csrf
                @method('POST')
                <label for="nombre">Escribe el nombre del producto</label>
                <input type="string" name=nombre id=nombre class="form-control" required>

                <label for="descripcion">Agrega una descripción del producto</label>
                <input type="text" name=descripcion id=descripcion class="form-control" required>

                

                <button class="btn btn-primary mt-3">Agregar</button>
                <a href="{{route('index')}}" class="btn btn-secondary mt-3">Cancelar</a>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>
    
@endsection