@extends('layouts.plantilla')
@section('title','Eliminar Alumno')
@section('content')
    <h1> Estas seguro de eliminar este registro???</h1>
        <label for="">
            Cod. Estudiante:{{$alumnos->cod_estudiante}}<br/>
        </label>
        <br/>
        <label for="">
            DNI:{{$alumnos->dni}}<br/>
        </label>
        <br/>
        <label for="">
            Nombres:{{$alumnos->nombres}}<br/>
        </label>
        <br/>
        <label for="">
            Apellidos:{{$alumnos->apellidos}}<br/>
        </label>
        <br/>
    <form action="{{route('alumnos.destroy', $alumnos->cod_estudiante)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Aceptar</button>
    </form>
@endsection