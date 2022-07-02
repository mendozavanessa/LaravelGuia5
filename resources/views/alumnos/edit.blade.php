@extends('layouts.plantilla')
@section('title','Editar Alumno')
@section('content')
    <h1> En esta página podras editar los datos de un Alumno</h1>
    <form action="{{route('alumnos.edit')}}" method="POST">
        @csrf
        <label for="">
            Cod. Estudiante: {{$alumno->cod_estudiante}} <br/>
            <input type="text" name="cod_estudiante" value="{{$alumno->cod_estudiante}}">
        </label>
        <br/>
        <label for="">
            DNI:<br/>
            <input type="text" name="dni" placeholder="{{$alumno->dni}}">
        </label>
        <br/>
        <label for="">
            Nombres:<br/>
            <input type="text" name="name" placeholder="{{$alumno->nombres}}">
        </label>
        <br/>
        <label for="">
            Apellidos:<br/>
            <input type="text" name="apellidos"placeholder="{{$alumno->apellidos}}">
        </label>
        <br/>
        <br/>
        <button type="submit">Enviar formulario</button>
    </form>
    <a href="{{route('alumnos.index')}}"> Volver al inicio </a></br>
    <a href="{{route('alumnos.viewdelete', $alumno->cod_estudiante)}}"> Eliminar </a>
@endsection