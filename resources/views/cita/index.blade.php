@extends('adminlte::page')

@section('title', 'Clinica Dental')

@section('content_header')
    <h1>Citas de la Clinica</h1>
@stop

@section('content')
<a href="{{ url('cita/create') }}" class="btn btn-success"> Registrar cita</a>
<br>
<br>
<div class ="row float-end">
<div class = "col-sm-12">
<form action = "{{route('cita.index')}}" method="get">
                     <div class="form-row">
                     <div class="col-sm-8 my-1">
    <input type="text" class="form-control" name="texto" value ="{{$texto}}">
    </div>
    <div class="col-auto my-1">
      <input type= "submit" class="btn btn-primary" value="Buscar">

  </div>
</div>
</div>
                     </form>

                     </div>

<table class="table table-borderless table-hover">
    <thead class="thead-dark">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Paciente</th>
        <th scope="col">Tratamiento</th>
        <th scope="col">Forma de pago</th>
        <th scope="col">Número de Pieza</th>
        <th scope="col">Fecha</th>
        <th scope="col">Hora</th>
        <th scope="col">Acciones</th>

      </tr>
    </thead>
    <tbody>
        @foreach ( $citas as $cita )
            <tr>
                <th>{{$cita->id}}</th>


          @foreach ($pacientes as $paciente  )
            @if ($cita->paciente_id == $paciente->id)
                 <th>{{$paciente->nombre}}</th>
             @endif
          @endforeach

          @foreach ($tratamientos as $tratamiento  )
            @if ($cita->tratamiento_id == $tratamiento->id)
                 <th>{{$tratamiento->nombre}}</th>
             @endif
          @endforeach


                <th>{{$cita->formaPago}}</th>
                <th>{{$cita->pieza}}</th>




                <th>{{$cita->fecha}}</th>
                <th>{{$cita->hora}}</th>
                <th>



                <form action="{{ url('/cita/'.$cita->id) }}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" class="btn btn-danger" onclick ="return confirm('¿Estas seguro de que quieres borrar?')"value="Borrar">

                    <a href="{{ url('/cita/'.$cita->id.'/edit') }}"  class="btn btn-primary">
                    Editar
                </a>

                </form>


                </th>

              </tr>


        @endforeach
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </tbody>
  </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
