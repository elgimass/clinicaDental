
@csrf
<div class="container">
<div class="card">
  <div class="card-body">

    <div class ="form-group">
    <label for="tratamiento_id"> Seleccion Paciente </label>
            <div class="input-group">
            <select class="input-group"   name="paciente_id"    id="paciente_id">


            <option value="{{$citas[0]->paciente_id}}">{{ $citas[0]->paciente}}</option>

    </select>
            </div>
            <br>
            <div class="input-group">
             <label for="tratamiento_id"> Seleccion Tratamiento </label>
            <select class="input-group" name="tratamiento_id"    id="tratamiento_id">

            <option value="{{$citas[0]->tratamiento_id}}">{{ $citas[0]->tratamiento}}</option>
            @foreach ($tratamientos as $tratamiento)
            <option value="{{$tratamiento["id"]}}">{{ $tratamiento->nombre}}</option>


            @endforeach

    </select>
            </div>
            <br>
            <div class="input-group">
            <input class="input-group" type="text" name="formaPago" value="{{isset ($citas[0]->formaPago)?$citas[0]->formaPago:''}}" id="formaPago" placeholder="Ingresar Forma de Pago">
            </div>
            <br>
            <div class="input-group">
            <input class="input-group" type="text" name="pieza" value="{{isset ($citas[0]->pieza)?$citas[0]->pieza:''}}" id="pieza" placeholder="Ingresar Pieza">
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
