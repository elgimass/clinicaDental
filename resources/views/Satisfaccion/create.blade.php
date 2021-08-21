@extends('adminlte::page')

@section('title', 'Clinica Dental')

@section('content_header')
    <h1>Encuesta NPS</h1>
@stop

@section('content')
<form action="{{url ('/satisfaccion') }}" method="post" enctype="multipart/form-data">

@include('Satisfaccion.form')


</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

