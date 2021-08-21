
  @extends('adminlte::page')

@section('title', 'Clinica Dental')

@section('content_header')
    <h1>Lista de Cuentas</h1>
@stop

@section('content')
<a href="{{ url('cuenta/create') }}" class="btn btn-success"> Registrar cobro</a>

<table class="table">
    <thead class="thead-light">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Paciente</th>
        <th scope="col">Fecha</th>
        <th scope="col">Pieza</th>
        <th scope="col">Tratamiento</th>
        <th scope="col">Cargos</th>
        <th scope="col">Abonos</th>
        <th scope="col">Saldo</th>
        <th scope="col">Acciones</th>

      </tr>
    </thead>
    <tbody>
    @foreach ( $cuentas as $cuenta )
            <tr>
                <th>{{$cuenta->id}}</th>


          @foreach ($pacientes as $paciente  )
            @if ($cuenta->paciente_id == $paciente->id)
                 <th>{{$paciente->nombre}}</th>
             @endif
          @endforeach


                <th>{{$cuenta->fecha}}</th>
                <th>{{$cuenta->pieza}}</th>
                <th>{{$cuenta->tratamiento}}</th>
                <th>{{$cuenta->cargos}}</th>
                <th>{{$cuenta->abonos}}</th>
                <th>{{$cuenta->saldos}}</th>
                <th>




                <form action="{{ url('/cuenta/'.$cuenta->id) }}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" class="btn btn-danger" onclick ="return confirm('¿Estas seguro de que quieres borrar?')"value="Borrar">
                    <a href="{{ url('/cuenta/'.$cuenta->id.'/edit') }}"  class="btn btn-primary">
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
