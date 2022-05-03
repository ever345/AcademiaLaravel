@extends('loyauts.app')

@section('titulo', 'Detalle Curso')

@section('contenido')
<div ">

    <h3 class="text-center">Detalles del Curso</h3>
    <br>
    <img src="{{ Storage::url($cursito->imagen)}}" class="card-img-top mx-auto d-block" alt="Imagen del curso" style="width:30%; height: 30%;">

    <p class="text-center">{{$cursito->descripcion}}</p>
    <div class="row" style="padding: 0 39%">
        <div class="col-1">
            <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-dark">Editar</a>
        </div>
        <div class="col" style="padding: 0 20%">
            <form action="/cursos/{{$cursito->id}}" method="POST" class="form-group">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>


@endsection
