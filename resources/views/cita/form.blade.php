
@csrf

    <label for="paciente_id"> Nombre del paciente </label>
    <select name="paciente_id"    id="paciente_id">
        @foreach ($pacientes as $paciente)
            <option value="{{isset($paciente["id"])?$paciente["id"]:''}}">{{ $paciente->nombre}}</option>
        @endforeach)
    </select>

    <br>
    <label for= "formaPago"> Forma de pago </label>
    <input type="text" name="formaPago" value="{{isset ($cita->formaPago)?$cita->formaPago:''}}" id="formaPago">
    <br>
    <label for= "pieza"> Pieza </label>
    <input type="text" name="pieza" value="{{isset ($cita->pieza)?$cita->pieza:''}}" id="pieza">
    <br>
    <label for= "tratamiento"> Tratamiento </label>
    <input type="text" name="tratamiento" value="{{isset ($cita->tratamiento)?$cita->tratamiento:''}}" id="tratamiento">
    <br>
    <label for= "fecha"> Fecha </label>
    <input type="date" name="fecha" value="{{isset ($cita->fecha)?$cita->fecha:''}}" id="fecha">
    <br>
    <label for= "hora"> Hora </label>
    <input type="time" name="hora" value="{{isset ($cita->hora)?$cita->hora:''}}" id="hora">
    <br>
    <input type="submit" value="Guardar Datos">
    <br>
