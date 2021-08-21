@extends('adminlte::page')

@section('title', 'Clinica Dental')

@section('content_header')
    <h1>Editar Enfermedad</h1>
@stop

@section('content')
<form action="{{url ('/alergias/'.$datosalergia->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
@include('AlergiaPaciente.form')


    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
