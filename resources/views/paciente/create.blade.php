@extends('adminlte::page')

@section('title', 'Clinica Dental')

@section('content_header')
    <h1>Agregar Paciente</h1>
@stop

@section('content')
<form action="{{url ('/paciente') }}" method="post" enctype="multipart/form-data">

@include('paciente.form')


</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

