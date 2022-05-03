@extends('loyauts.app')

@section('titulo','Editar Docente')

@section('contenido')

<br>
    <h3 class="text-center">Modificar Docente</h3>
    <form action="/docentes/{{$docent -> id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nombre">Ingrese un nuevo nombre</label>
            <input id="nombre" class="form-control" type="text" name="nombre" value="{{$docent->nombre}}">
        </div>
        <div class="form-group">
            <label for="tituloUniversitario">Ingrese una nueva titulo universitario</label>
            <input id="tituloUniversitario" class="form-control" type="text" name="tituloUniversitario" value="{{$docent->tituloUniversitario}}">
        </div>
        <div class="form-group">
            <label for="edad">Ingrese una nueva edad</label>
            <input id="edad" class="form-control" type="text" name="edad" value="{{$docent->edad}}">
        </div>
        <div class="form-group">
            <label for="fotoPerfil">Cargue nueva foro de perfil</label>
            <br>
            <input id="fotoPerfil" type="file" name="fotoPerfil">
        </div>
        <button type="submit" class="btn btn-dark">Actualizar</button>
    </form>

@endsection

