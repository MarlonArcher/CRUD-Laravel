@extends('estudiante/template')
@section('title','Editar Estudiante')
@section('content')
<h1>Editar Estudiante</h1>
<form action="{{url('/estudiante/'. $estudiante1['cedula'])}}" method="POST">
    @method("PUT")
    @csrf
    <div><label for="cedula">Cedula</label>
    <input type="text" name="cedula" id="cedula" value = "{{$estudiante1['cedula']}}" readonly></div>
    <div><label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value = "{{$estudiante1['nombre']}}"></div>
    <div><label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido" value = "{{$estudiante1['apellido']}}"></div>
    <div><label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion" value = "{{$estudiante1['direccion']}}"></div>
    <div><label for="telefono">Telefono</label>
    <input type="text" name="telefono" id="telefono" value = "{{$estudiante1['telefono']}}"></div>
    <div>
        <button type="submit">Guardar</button>
    </div>
</form>
@endsection