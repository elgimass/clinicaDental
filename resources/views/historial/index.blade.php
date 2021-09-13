@extends('adminlte::page')

@section('title', 'Clinica Dental')

@section('content_header')
    <h1>Historiales Clinico</h1>
@stop

@section('content')
<br>
<br>
<div class ="row float-end">
<div class = "col-sm-12">
<form action = "{{route('historial.index')}}" method="get">
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

<div class="table-responsive">
<table class="table table-borderless table-hover">
    <thead class="thead-dark">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Paciente</th>
        <th scope="col">Tratamiento</th>
        <th scope="col">Número de Pieza</th>
        <th scope="col">fecha</th>
        <th scope="col">Trabajo Realizado</th>
        <th scope="col">Observaciones</th>
        <th scope="col">Acciones</th>

      </tr>
    </thead>
    <tbody>
        @foreach ( $historiales as $key => $historial )
            <tr>
                <th>{{$historial->id}}</th>


          @foreach ($pacientes as $key => $paciente  )
            @if ($historial->paciente_id == $paciente ->id)
                 <th>{{$paciente->nombre}}</th>
             @endif
          @endforeach

          @foreach ($tratamientos as $tratamiento  )
            @if ($historial->tratamiento_id == $tratamiento->id)
                 <th>{{$tratamiento->nombre}}</th>
             @endif
          @endforeach



                <th>{{$historial->pieza}}</th>




                <th>{{$historial->fecha}}</th>
                <th>{{$historial->estado}}</th>
                <th>{{$historial->observaciones}}</th>
                <th>




                <form action="{{ url('/historial/'.$historial->id) }}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" class="btn btn-danger" onclick ="return confirm('¿Estas seguro de que quieres borrar?')"value="Borrar">
                    <a href="{{ url('/historial/'.$historial->id.'/edit') }}"  class="btn btn-primary">
                    Editar
                </a>
                </form>


                </th>

              </tr>
            </div>
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
