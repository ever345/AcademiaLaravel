@extends('loyauts.app')

@section('titulo', 'Listado Docentes')

@section('contenido')
<a href="/docentes/create" class="btn btn-primary">Crear Docente</a>
<br>
<h3>Aqui encontraras los Docentes</h3>

<div class="row">
@foreach ($docent as $alias )
    <div class="col-sm mt-3">
        <div class="card text-center" style="width: 18rem;">
            <img src="{{ Storage::url($alias->fotoPerfil)}}" class="card-img-top mx-auto d-block" alt="Imagen del curso" style="height: 200px;">
            <div class="card-body">
                <h5 class="card-title">{{$alias->nombre}}</h5>
                <a href="/docentes/{{$alias->id}}" class="btn btn-dark">Mas detalles</a>
            </div>
        </div>
    </div>
@endforeach
</div>

@endsection
