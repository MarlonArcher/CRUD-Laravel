@extends('estudiante/template')
@section('title','Nuevo Estudiante')
@section('content')
<h1>Crear Nuevo Estudiante</h1>
<form action="{{url('/estudiante')}}" method="POST">
    @csrf
    <div><label for="cedula">Cedula</label>
    <input type="text" name="cedula" id="cedula"></div>
    <div><label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"></div>
    <div><label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido"></div>
    <div><label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion"></div>
    <div><label for="telefono">Telefono</label>
    <input type="text" name="telefono" id="telefono"></div>
    <div>
        <button type="submit">Guardar</button>
    </div>
</form>
@endsection