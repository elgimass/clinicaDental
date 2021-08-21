
@csrf
<div class="container">
<div class="card">
<div class="card-body">

    <div class ="form-group">
        <label for="tratamiento_id"> Seleccion Paciente </label>
                <div class="input-group">
                <select class="input-group"   name="paciente_id"    id="paciente_id">


                <option value="{{$historials[0]->paciente_id}}">{{ $historials[0]->paciente}}</option>

            </select>
        </div>
        <br>
        <div class="input-group">
         <label for="tratamiento_id"> Seleccion Tratamiento </label>
        <select class="input-group" name="tratamiento_id"    id="tratamiento_id">

        <option value="{{$historials[0]->tratamiento_id}}">{{ $historials[0]->tratamiento}}</option>
        @foreach ($tratamientos as $tratamiento)
        <option value="{{$tratamiento["id"]}}">{{ $tratamiento->nombre}}</option>


        @endforeach

</select>

    </div>
    <br>
     <div class="input-group">
     <input class="input-group" type="text" name="pieza" value="{{isset ($historials[0]->pieza)?$historials[0]->pieza:''}}" id="pieza" placeholder="Ingresar Pieza a Trabajar">
     </div>
    <br>
    <div class="input-group">
    <label for="fecha"> Seleccion la Fecha del Tratamiento </label>
        <input class="input-group" type="date" name="fecha" value="{{isset ($historials[0]->fecha)?$historials[0]->fecha:''}}" id="fecha">
        </div>
        <br>
    <div class="input-group">
        <label for="estado"> Seleccionar el estado de la cita </label>
        <select name="estado" class="input-group" id="estado">
            <option value="{{$historials[0]->estado}}">{{ $historials[0]->estado}}</option>
            <option value="Realizado" > Realizado </option>
            <option value="Cita Cancelada" >Cita Cancelada</option>
          </select>
     </div>
     <br>
     <div class="input-group">
     <input class="input-group" type="text" name="observaciones" value="{{isset ($historials[0]->observaciones)?$historials[0]->observaciones:''}}" id="observaciones" placeholder="Ingrese Observaciones del tratamiento">
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
