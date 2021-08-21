
@csrf

    <label for="paciente_id"> Nombre del paciente </label>
    <select name="paciente_id"    id="paciente_id">
        @foreach ($pacientes as $paciente)
            <option value="{{isset($paciente["id"])?$paciente["id"]:''}}">{{ $paciente->nombre}}</option>
        @endforeach)
    </select>

    <label for= "fecha"> Fecha </label>
    <input type="date" name="fecha" value="{{isset ($cuenta->fecha)?$cuenta->fecha:''}}" id="fecha">
    <br>
    <br>
    <label for= "pieza"> Pieza </label>
    <input type="text" name="pieza" value="{{isset ($cuenta->pieza)?$cuenta->pieza:''}}" id="pieza">
    <br>
    <label for= "tratamiento"> Tratamiento </label>
    <input type="text" name="tratamiento" value="{{isset ($cuenta->tratamiento)?$cuenta->tratamiento:''}}" id="tratamiento">
    <br>
    <label for "cargos"> Cargo </label>
    <input type="number" name="cargos" value="{{isset ($cuenta->cargos)?$cuenta->cargos:''}}" id="cargos">
    <br>
    <label for "abonos"> Abono </label>
    <input type="number" name="abonos" value="{{isset ($cuenta->abonos)?$cuenta->abonos:''}}" id="abonos">
    <br>
    <label for "saldos"> Saldo </label>
    <input type="number" name="saldos" value="{{isset ($cuenta->saldos)?$cuenta->saldos:''}}" id="saldos">
    <br>
    <input type="submit" value="Guardar Datos">
    <br>
