@extends('loyauts.app')

@section('titulo','Editar')

@section('contenido')

<br>
    <h3 class="text-center">Modificar Curso</h3>
    <form action="/cursos/{{$cursito -> id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nombre">Ingrese un nuevo nombre</label>
            <input id="nombre" class="form-control" type="text" name="nombre" value="{{$cursito->nombre}}">
        </div>
        <div class="form-group">
            <label for="descrip">Ingrese una nueva descripcion</label>
            <input id="descrip" class="form-control" type="text" name="descripcion" value="{{$cursito->descripcion}}">
        </div>
        <div class="form-group">
            <label for="imagen">Cargue nueva imagen</label>
            <br>
            <input id="imagen" type="file" name="imagen">
        </div>
        <button type="submit" class="btn btn-dark">Actualizar</button>
    </form>

@endsection

