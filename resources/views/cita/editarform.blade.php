
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
                <label for="pieza"> Seleccionar el número de pieza a tratar </label>
            <select name="pieza" class="input-group" value="{{isset ($citas[0]->pieza)?$citas[0]->pieza:''}}" id="pieza">
                select name="" id="" >
                <option value="{{$citas[0]->pieza}}">{{ $citas[0]->pieza}}</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    <option value="32">32</option>
              </select>
            </div>
            <br>
            <label for="fecha"> Seleccionar la fecha de la cita </label>
            <div class="input-group">
            <input class="input-group" type="date" name="fecha" value="{{isset ($citas[0]->fecha)?$citas[0]->fecha:''}}" id="fecha"  placeholder="Seleccione la fecha de la cita">
            </div>
            <br>
            <label for="hora"> Seleccionar el horario de la cita </label>
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
