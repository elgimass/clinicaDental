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
        <div class="input-group">
        <input class="input-group" type="text" name="alergia" value="{{isset ($datosalergia->alergia)?$datosalergia->alergia:''}}" id="alergia"  placeholder="Ingresar Padecimiento">
        </div>
        <br>

        </div>
    </div>
    </div>

    <br>
    <div class="form-group">
    <button type="submit" class="btn btn-primary btn-block">
       Guardar datos</button>
   </div>
    <br>
