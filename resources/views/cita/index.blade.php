@extends('adminlte::page')

@section('title', 'Clinica Dental')

@section('content_header')
    <h1>Citas de la Clinica</h1>
@stop

@section('content')
<a href="{{ url('cita/create') }}"> Registrar cita</a>

<table class="table">
    <thead class="thead-light">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Paciente</th>
        <th scope="col">Forma de pago</th>
        <th scope="col">Pieza</th>
        <th scope="col">Tratamiento</th>
        <th scope="col">fecha</th>
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


                <th>{{$cita->formaPago}}</th>
                <th>{{$cita->pieza}}</th>
                <th>{{$cita->tratamiento}}</th>
                <th>{{$cita->fecha}}</th>
                <th>{{$cita->hora}}</th>
                <th>

                <a href="{{ url('/cita/'.$cita->id.'/edit') }}">
                    Editar
                </a>
                |

                <form action="{{ url('/cita/'.$cita->id) }}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick ="return confirm('¿Estas seguro de que quieres borrar?')"value="Borrar">
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
