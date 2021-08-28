@csrf

<div class="container">
<div class="card">
  <div class="card-body">

        <div class ="form-group">
            <div class="input-group">
                <input class="input-group" type="text" name="nombre" value="{{ isset ($paciente->nombre)?$paciente->nombre:''}}" id="nombre" placeholder="Ingresar Nombre">

            </div>
            <br>
            <div class="input-group">
                <input class="input-group" type="number" name="edad" value="{{isset ($paciente->edad)?$paciente->edad:''}}" id="edad" placeholder="Ingresar Edad">
            </div>
            <br>
            <div class="input-group">
            <input class="input-group" type="text" name="direccion" value="{{isset ($paciente->direccion)?$paciente->direccion:''}}" id="direccion"  placeholder="Ingresar Direccion">
            </div>
            <br>
            <div class="input-group">
            <input class="input-group" type="text" name="telefono" value="{{isset ($paciente->telefono)?$paciente->telefono:''}}" id="telefono" placeholder="Ingresar Telefono">
            </div>
            <br>
            <div class="input-group">
            <input class="input-group" type="text" name="ocupacion" value="{{isset ($paciente->ocupacion)?$paciente->ocupacion:''}}" id="ocupacion" placeholder="Ingresar Ocupacion">
            </div>
            <br>
            <div class="input-group">
            <input class="input-group" type="text" name="referido" value="{{isset ($paciente->referido)?$paciente->referido:''}}" id="referido" placeholder="Ingresar Referido">
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
