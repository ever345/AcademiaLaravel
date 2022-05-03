@extends('loyauts.app')

@section('titulo', 'Mensage Exitoso')

@section('contenido')
<div class="container" style="padding: 50px 79px">
    @if ($tabla == 'Curso' and $estado == 'Eliminado')
        <p style="text-align: center; border: 4px solid rgb(183, 39, 39); padding: 40px 60px; background:rgba(183, 39, 39, 0.427); font-size: 20px;">
            El {{$tabla}} ha sido {{$estado}} correctamente
        </p>
    @elseif ($tabla == 'Curso' and $estado == 'Eliminado')
        <p style="text-align: center; border: 4px solid rgb(183, 39, 39); padding: 40px 60px; background:rgba(183, 39, 39, 0.536); font-size: 20px;">
            El {{$tabla}} ha sido {{$estado}} correctamente
        </p>
    @else
        <p style="text-align: center; border: 4px solid rgb(39, 121, 36); padding: 40px 60px; background:rgba(39, 121, 36, 0.54); font-size: 20px;">
                El {{$tabla}} ha sido {{$estado}} correctamente
        </p>
    @endif

@if ($tabla == 'Curso')
    <div class="row">
        <div class="col"><a href="/cursos" class="btn btn-dark">Ver listado</a></div>
    </div>

@else
    <div class="row">
        <div class="col"><a href="/docentes" class="btn btn-dark">Ver Docentes</a></div>
    </div>

@endif



</div>

@endsection
