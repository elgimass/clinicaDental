@csrf
<div class="container">
<div class="card">
  <div class="card-body">

    <div class ="form-group">
                <div class="input-group">
                <label for="tratamiento_id"> Seleccion Paciente </label>
                <select class="input-group"  name="paciente_id"    id="paciente_id"  >
                @foreach ($pacientes as $paciente)
                <option value="{{isset($paciente["id"])?$paciente["id"]:''}}">{{ $paciente->nombre}}  </option>
                @endforeach)
        </select>
        </div>
        <br>
        <div class ="form-group">
        <label for="tratamiento_id"> Seleccion Padecimiento </label>
                <div class="input-group">
        <select name="alergia_id"    id="alergia_id">
            @foreach ($alergias as $alergiaa)
                <option value="{{isset($alergiaa["id"])?$alergiaa["id"]:''}}">{{ $alergiaa->nombre}}</option>
            @endforeach)
        </select>

        </div>
    </div>
    </div>

    <br>
    <div class="form-group">
    <button type="submit" class="btn btn-primary btn-block">
       Guardar datos</button>
   </div>
    <br>
