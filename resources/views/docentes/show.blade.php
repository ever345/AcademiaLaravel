@extends('loyauts.app')

@section('titulo', 'Detalle Docente')

@section('contenido')

<h3 class="text-center">Detalles del Docente</h3>
<br>
    <img src="{{ Storage::url($docent->fotoPerfil)}}" class="card-img-top mx-auto d-block" alt="Imagen del curso" style="width:30%; height: 30%;">

    <p class="text-center">{{$docent->tituloUniversitario}}</p>
    <p class="text-center">{{$docent->edad}}</p>
    <div class="row" style="padding: 0 39%">
        <div class="col-1">
            <a href="/docentes/{{$docent->id}}/edit" class="btn btn-dark">Editar</a>
        </div>
        <div class="col" style="padding: 0 20%">
            <form action="/docentes/{{$docent->id}}" method="POST" class="form-group">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>

@endsection
