
@csrf
<div class="container">
<div class="card">
  <div class="card-body">

    <div class ="form-group">
        <label for="paciente_id"> Seleccion Paciente </label>
        <div class="input-group">
        <select class="input-group"  name="paciente_id"    id="paciente_id">
        @foreach ($pacientes as $paciente)

        <option value="{{isset($paciente["id"])?$paciente["id"]:''}}">{{ $paciente->nombre}}</option>
        @endforeach)
</select>
        </div>
        <br>
        <div class="input-group">
        <label for="tratamiento_id"> Seleccion Tratamiento </label>
        <select class="input-group" name="tratamiento_id"    id="tratamiento_id">
    @foreach ($tratamientos as $tratamiento  )
        <option value="{{isset($tratamiento["id"])?$tratamiento["id"]:''}}">{{ $tratamiento->nombre}}</option>
    @endforeach)
</select>
        </div>
            <br>
            <div class="input-group">
            <input class="input-group" type="text" name="formaPago" value="{{isset ($citas[0]->formaPago)?$citas[0]->formaPago:''}}" id="formaPago" placeholder="Ingresar Forma de Pago">
            </div>
            <br>
            <div class="input-group">
                <label for="pieza"> Seleccionar la pieza a tratar </label>
        <select name="pieza" class="input-group" id="pieza">
            <option value="{{isset ($citas[0]->pieza)?$citas[0]->pieza:''}}">{{ $citas[0]->pieza}}</option>
            <option value="1" > 1 </option>
            <option value="2" >2</option>
          </select>

            </div>
            <br>
            <div class="input-group">
            <input class="input-group" type="date" name="fecha" value="{{isset ($citas[0]->fecha)?$citas[0]->fecha:''}}" id="fecha"  placeholder="Seleccione la fecha de la cita">
            </div>
            <br>
            <div class="input-group">
            <input class="input-group" type="time" name="hora" value="{{isset ($citas[0]->hora)?$citas[0]->hora:''}}" id="hora" placeholder="Seleccione la hora de la cita">
            </div>
        </div>
  </div>
</div>


<br>
    <div class="form-group">
    <button type="submit" class="btn btn-primary btn-block">
       Guardar datos</button>
   </div>
    <br>
