@extends('loyauts.app')

@section('titulo', 'Detalle Curso')

@section('contenido')

<h3 class="text-center">Detalles del Curso</h3>
<br>
    <img src="{{ Storage::url($cursito->imagen)}}" class="card-img-top mx-auto d-block" alt="Imagen del curso" style="width:30%; height: 30%;">

    <p class="text-center">{{$cursito->descripcion}}</p>
    <center><a href="/cursos/{{$cursito->id}}/edit" class="btn btn-dark">Editar</a></center>

@endsection
