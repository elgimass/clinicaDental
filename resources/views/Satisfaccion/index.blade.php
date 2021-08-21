
  @extends('adminlte::page')

@section('title', 'Clinica Dental')

@section('content_header')
    <h1>NPS</h1>
@stop

@section('content')
<a href="{{ url('satisfaccion/create') }}" class="btn btn-success"> Registrar NSP</a>

<br>
<br>
<div class ="row float-end">
<div class = "col-sm-12">
<form action = "{{route('satisfaccion.index')}}" method="get">
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
        <th scope="col">Satisfaccion del tiempo de asignacion de cita</th>
        <th scope="col">Satisfaccion del servicio brindado</th>
        <th scope="col">Probabilidad de recomendacion del servicio</th>
        <th scope="col">Acciones</th>

      </tr>
    </thead>
    <tbody>
    @foreach ( $satisfaccions as $satisaccion )
            <tr>
                <th>{{$satisaccion->id}}</th>


          @foreach ($pacientes as $paciente  )
            @if ($satisaccion->paciente_id == $paciente->id)
                 <th>{{$paciente->nombre}}</th>
             @endif
          @endforeach


                <th>{{$satisaccion->tiempo}}</th>
                <th>{{$satisaccion->servicio}}</th>
                <th>{{$satisaccion->recomendacion}}</th>
                <th>




                <form action="{{ url('/satisfaccion/'.$satisaccion->id) }}"  method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" class="btn btn-danger" onclick ="return confirm('¿Estas seguro de que quieres borrar?')"value="Borrar">

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
