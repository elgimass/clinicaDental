@extends('adminlte::page')

@section('title', 'Clinica Dental')

@section('content_header')
    <h1>Editar Cobro</h1>
@stop

@section('content')
<form action="{{url ('/cuenta/'.$cuenta->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
@include('cuenta.form')


    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
