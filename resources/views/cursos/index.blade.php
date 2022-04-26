@extends('loyauts.app')

@section('titulo', 'Listado Curso')

@section('contenido')
<br>
<h3>Aqui encontraras los contenidos del cursos</h3>
<div class="row">
{{--con foreach hago el recorido de la array--}}
@foreach ($cursito as $alias )
    <div class="col mt-3">
        <div class="card text-center" style="width: 18rem;">
            <img src="{{ Storage::url($alias->imagen)}}" class="card-img-top mx-auto d-block" alt="Imagen del curso" style="height: 200px;">
            <div class="card-body">
                <h5 class="card-title">{{$alias->nombre}}</h5>
                <p class="card-text">{{$alias->descripcion}}</p>
                <a href="#" class="btn btn-dark">Mas detalles</a>
            </div>
        </div>
    </div>
@endforeach
</div>

@endsection
