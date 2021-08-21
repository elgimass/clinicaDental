@extends('adminlte::page')

@section('title', 'Clinica Dental')

@section('content_header')
    <h1>Registrar alergia paciente</h1>
@stop

@section('content')

<form action="{{url ('/alergia') }}" method="post" enctype="multipart/form-data">
@include('AlergiaPaciente.form')


</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

