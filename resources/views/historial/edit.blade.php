@extends('adminlte::page')

@section('title', 'Clinica Dental')

@section('content_header')
    <h1>Editar Registro</h1>
@stop

@section('content')
<form action="{{url ('/historial/'.$historials[0]->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
@include('historial.editarform')


    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
