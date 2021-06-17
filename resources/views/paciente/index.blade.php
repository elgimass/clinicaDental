
  @extends('adminlte::page')

@section('title', 'Clinica Dental')

@section('content_header')
    <h1>Lista de Pacientes</h1>
@stop

@section('content')
<a href="{{ url('paciente/create') }}"> Registrar paciente</a>

<table class="table">
    <thead class="thead-light">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <tr>
        <th scope="col">id</th>
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

                <a href="{{ url('/paciente/'.$paciente->id.'/edit') }}">
                    Editar
                </a>
                |

                <form action="{{ url('/paciente/'.$paciente->id) }}" method="post">
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
