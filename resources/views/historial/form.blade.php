
@csrf
    <div class="container">
    <div class="card">
    <div class="card-body">
    <div class ="form-group">
        <label for="tratamiento_id"> Seleccion Paciente </label>
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
         <input class="input-group" type="text" name="pieza" value="{{isset ($historials->pieza)?$historials->pieza:''}}" id="pieza" placeholder="Ingresar Pieza a Trabajar">
         </div>
        <br>
        <div class="input-group">
        <label for="fecha"> Seleccion la Fecha del Tratamiento </label>
            <input class="input-group" type="date" name="fecha" value="{{isset ($historials->fecha)?$historials->fecha:''}}" id="fecha">
            </div>
            <br>
        <div class="input-group">
        <input class="input-group"  type= "text" name="estado" value="{{isset ($historials->estado)?$historials->estado:''}}" id="estado" placeholder="Ingresar el estado de la cita">
         </div>
         <br>
         <div class="input-group">
         <input class="input-group" type="text" name="observaciones" value="{{isset ($historials->observaciones)?$historials->observaciones:''}}" id="observaciones" placeholder="Ingrese Observaciones del tratamiento">
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
