@csrf
<label for "nombre"> Nombre </label>
    <input type="text" name="Nombre" value="{{ isset ($paciente->nombre)?$paciente->nombre:''}}" id="nombre">
    <br>
    <label for "edad"> Edad </label>
    <input type="number" name="Edad" value="{{isset ($paciente->edad)?$paciente->edad:''}}" id="edad">
    <br>
    <label for "direccion"> Direccion </label>
    <input type="text" name="direccion" value="{{isset ($paciente->direccion)?$paciente->direccion:''}}" id="direccion">
    <br>
    <label for "telefono"> Telefono </label>
    <input type="text" name="telefono" value="{{isset ($paciente->telefono)?$paciente->telefono:''}}" id="telefono">
    <br>
    <label for "ocupacion"> Ocupacion </label>
    <input type="text" name="ocupacion" value="{{isset ($paciente->ocupacion)?$paciente->ocupacion:''}}" id="ocupacion">
    <br>
    <label for "referido"> Referido </label>
    <input type="text" name="referido" value="{{isset ($paciente->referido)?$paciente->referido:''}}" id="referido">
    <br>
    <input type="submit" value="Guardar Datos">
    <br>
