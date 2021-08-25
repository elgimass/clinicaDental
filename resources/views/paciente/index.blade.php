
  @extends('adminlte::page')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
@section('title', 'Clinica Dental')

@section('content_header')
    <h1>Pacientes</h1>
@stop

@section('content')
<a href="{{ url('paciente/create') }}" class="btn btn-success"> Registrar paciente</a>
    <br>
    <br>
    <div class ="row float-end">
    <div class = "col-sm-12">
    <form action = "{{route('paciente.index')}}" method="get">
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

      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nombre</th>
        <th scope="col">Edad</th>
        <th scope="col">Telefono</th>
        <th scope="col">Direccion</th>
        <th scope="col">Ocupacion</th>
        <th scope="col">Referido</th>
        <th scope="col">Acciones</th>

      </tr>
    </thead>
    <tbody>
        @foreach ( $pacientes as $paciente )
            <tr>
                <th>{{$paciente->id}}</th>
                <th>{{$paciente->nombre}}</th>
                <th>{{$paciente->edad}}</th>
                <th>{{$paciente->telefono}}</th>
                <th>{{$paciente->direccion}}</th>
                <th>{{$paciente->ocupacion}}</th>
                <th>{{$paciente->referido}}</th>
                <th>




                    @csrf



                    <a href="{{ url('/paciente/'.$paciente->id.'/edit') }}" class="btn btn-primary">
                    Editar
                </a>
                <a href="{{ url('/historial/'.$paciente->id) }}" class="btn btn-info">
                    Historial Clinico
                </a>






                </th>

              </tr>


        @endforeach
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
      <script> src = "https://cdn.jsdelivr.net/npm/chart.js@3.5.0/dist/chart.min.js" </script>

    </tbody>
  </table>
  {!! $pacientes->links() !!}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
