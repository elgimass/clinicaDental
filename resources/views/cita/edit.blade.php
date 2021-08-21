@extends('adminlte::page')

@section('title', 'Clinica Dental')

@section('content_header')
    <h1>Editar Cita</h1>
@stop

@section('content')

<form action="{{url ('/cita/'.$citas[0]->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
@include('cita.editarform')


    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
