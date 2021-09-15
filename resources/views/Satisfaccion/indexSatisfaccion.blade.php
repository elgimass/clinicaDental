
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

<div class="table-responsive">
<table class="table table-borderless table-hover">
    <thead class="thead-dark">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <tr>
        <th scope="col">Código</th>
        <th scope="col">Paciente</th>
        <th scope="col">Fecha</th>
        <th scope="col">Satisfaccion del tiempo de asignacion de cita</th>
        <th scope="col">Satisfaccion del servicio brindado</th>
        <th scope="col">Probabilidad de recomendacion del servicio</th>
        <th scope="col">Acciones</th>

        </tr>
    </thead>
    <tbody>

                @foreach ( $satisfaccions as $satisfaccion )
            <tr>
                @if ($satisfaccion -> paciente_id == $pacientes -> id)
                <th>{{$satisfaccion->id}}</th>

                        <th>{{$pacientes->nombre}}</th>





                <th>{{$satisfaccion->fecha}}</th>
                <th>{{$satisfaccion->tiempo}}</th>
            <th>{{$satisfaccion->servicio}}</th>
        <th>{{$satisfaccion->recomendacion}}</th>
                <th>




                  <form action="{{ url('/satisfaccion/'.$satisfaccion->id) }}"  method="post">
                      @csrf
                      {{method_field('DELETE')}}
                      <input type="submit" class="btn btn-danger" onclick ="return confirm('¿Estas seguro de que quieres borrar?')"value="Borrar">




                      <th hidden>{{$satisfaccion->fecha}}</th>
                      <th hidden>{{$satisfaccion->tiempo}}</th>
                      <th hidden>{{$satisfaccion->servicio}}</th>
                      <th hidden>{{$satisfaccion->recomendacion}}</th>

            @endif

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
