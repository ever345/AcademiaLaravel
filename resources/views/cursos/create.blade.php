{{--En bladee heredamos con @extends--}}

@extends('loyauts.app')

@section('titulo','Crear Curso')

@section('contenido')
<br>
    <h3 class="text-center"> Creacion de nuevo curso</h3>
    <form action="/cursos" method="POST" enctype="multipart/form-data">
        {{--csrf es una proteccion contra ataques malintencionados--}}
        @csrf
        <div class="form-group">
            <label for="nombre">Ingrese nombre del curso</label>
            <input id="nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="descrip">Ingrese un descripcion</label>
            <input id="descrip" class="form-control" type="text" name="descripcion">
        </div>
        <div class="form-group">
            <label for="imagen">Cargue una imagen para el curso</label>
            <br>
            <input id="imagen" type="file" name="imagen">
        </div>
        <button type="submit" class="btn btn-dark">Crear</button>
    </form>


@endsection

{{-- esto era antes de heredar la plantilla
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Formulario para crear</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
        <h3 class="text-center"> Creacion de nuevo curso</h3>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nombre">Ingrese nombre del curso</label>
                <input id="nombre" class="form-control" type="text" name="nombre">
            </div>
            <div class="form-group">
                <label for="descrip">Ingrese un descripcion</label>
                <input id="descrip" class="form-control" type="text" name="descripcion">
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>


</body>
</html>
--}}
