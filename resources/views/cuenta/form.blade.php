
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
                        <label for="fecha"> Seleccione Fecha </label>
                        <input class="input-group" type="date" name="fecha" value="{{isset ($cuentas[0]->fecha)?$cuentas[0]->fecha:''}}" id="fecha"  placeholder="Seleccione la fecha de la cita">
               </div>
                <br>
        <div class="input-group">
                    <input class="input-group" type="text" name="pieza" value="{{isset ($cuentas[0]->pieza)?$cuentas[0]->pieza:''}}" id="pieza" placeholder="Ingresar Pieza">
        </div>
         <br>
         <div class="input-group">
            <input class="input-group" type="number"  name="cargos" value="{{isset ($cuentas[0]->cargos)?$cuentas[0]->cargos:''}}" id="pieza" placeholder="Ingresar Cargo">
        </div>
        <br>
        <div class="input-group">
                <input class="input-group" type= "number" name="abonos" value="{{isset ($cuentas[0]->abonos)?$cuentas[0]->abonos:''}}" id="pieza" placeholder="Ingresar abono">
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
