
@extends('loyauts.app')

@section('titulo','Crear Docente')

@section('contenido')
<br>
    <h3 class="text-center"> Creacion de nuevo Docente</h3>
    <form action="/docentes" method="POST" enctype="multipart/form-data">
        {{--csrf es una proteccion contra ataques malintencionados--}}
        @csrf
        <div class="form-group">
            <label for="nombre">Ingrese nombre del docente</label>
            <input id="nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="tituloUniversitario">Ingrese un titulo Universitario</label>
            <input id="tituloUniversitario" class="form-control" type="text" name="tituloUniversitario">
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input id="edad" class="form-control" type="text" name="edad">
        </div>
        <div class="form-group">
            <label for="fotoPerfil">Cargue una fotoPerfil para el docente</label>
            <br>
            <input id="fotoPerfil" type="file" name="fotoPerfil">
        </div>
        <button type="submit" class="btn btn-dark">Crear</button>
    </form>


@endsection

