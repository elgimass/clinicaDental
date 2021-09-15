
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
    </div>
    <br>
    <label for="fecha"> Seleccionar la fecha del día de la Encuesta </label>
    <div class="input-group">
    <input class="input-group" type="date" name="fecha" value="{{isset ($satisfaccions[0]->fecha)?$satisfaccions[0]->fecha:''}}" id="fecha"  placeholder="Seleccione la fecha de la cita">
    </div>
    <br>
    <div class="card card-gray"  >
        <div class="card-header" style="text-align: center">
            <div>
                <Span>
                    <label for="">Como califica el tiempo de atención?</label>
                </Span>
            </div>
        </div>
        <div class="card-body">
        <div style="text-align: center">
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tiempo" value="1" id="tiempo">
                    <label class="form-check-label" for="inlineRadio1" sytle="widt:500px; weight:500px">1
                    </label>
                    <div >
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </div>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tiempo" value="2" id="tiempo">
                    <label class="form-check-label" for="inlineRadio1">2
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tiempo" value="3" id="tiempo">
                    <label class="form-check-label" for="inlineRadio1">3
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tiempo" value="4" id="tiempo">
                    <label class="form-check-label" for="inlineRadio1">4
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tiempo" value="5" id="tiempo">
                    <label class="form-check-label" for="inlineRadio1">5
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tiempo" value="6" id="tiempo">
                    <label class="form-check-label" for="inlineRadio1">6
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tiempo" value="7" id="tiempo">
                    <label class="form-check-label" for="inlineRadio1">7
                        <i class="far fa-meh fa-lg" style="background-color:#f8961e; width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tiempo" value="8" id="tiempo">
                    <label class="form-check-label" for="inlineRadio1">8
                        <i class="far fa-meh fa-lg" style="background-color:#f8961e; width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tiempo" value="9" id="tiempo">
                    <label class="form-check-label" for="inlineRadio1">9
                        <i class="far fa-smile fa-lg" style="background-color:rgb(68, 148, 74); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tiempo" value="10" id="tiempo">
                    <label class="form-check-label" for="inlineRadio1">10
                        <i class="far fa-smile fa-lg" style="background-color:rgb(68, 148, 74); width:10; height:10;"></i>
                    </label>
                </div>
            </div>
            </div>
        </div>
    </div>
    <br>

    <div class="card card-gray" >
        <div class="card-header" style="text-align: center">
            <div>
                <Span>
                    <label for="">Que tan bueno le parece el servicio brindado?</label>
                </Span>
            </div>
        </div>
        <div class="card-body">
            <div style="text-align: center">
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="servicio" value="1" id="servicio">
                    <label class="form-check-label" for="inlineRadio1" sytle="widt:500px; weight:500px">1
                    </label>
                    <div >
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </div>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="servicio" value="2" id="servicio">
                    <label class="form-check-label" for="inlineRadio1">2
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="servicio" value="3" id="servicio">
                    <label class="form-check-label" for="inlineRadio1">3
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="servicio" value="4" id="servicio">
                    <label class="form-check-label" for="inlineRadio1">4
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="servicio" value="5" id="servicio">
                    <label class="form-check-label" for="inlineRadio1">5
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="servicio" value="6" id="servicio">
                    <label class="form-check-label" for="inlineRadio1">6
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="servicio" value="7" id="servicio">
                    <label class="form-check-label" for="inlineRadio1">7
                        <i class="far fa-meh fa-lg" style="background-color:#f8961e; width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="servicio" value="8" id="servicio">
                    <label class="form-check-label" for="inlineRadio1">8
                        <i class="far fa-meh fa-lg" style="background-color:#f8961e; width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="servicio" value="9" id="servicio">
                    <label class="form-check-label" for="inlineRadio1">9
                        <i class="far fa-smile fa-lg" style="background-color:rgb(68, 148, 74); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="servicio" value="10" id="servicio">
                    <label class="form-check-label" for="inlineRadio1">10
                        <i class="far fa-smile fa-lg" style="background-color:rgb(68, 148, 74); width:10; height:10;"></i>
                    </label>
                </div>
            </div>
            </div>
        </div>
    </div>
    <br>

    <div class="card card-gray" >
        <div class="card-header" style="text-align: center">
            <div>
                <Span>
                    <label for="">Que tan probable es que recomiendo el servicio de la Clinica?</label>
                </Span>
            </div>
        </div>
        <div class="card-body">
            <div style="text-align: center">
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="recomendacion" value="1" id="recomendacion">
                    <label class="form-check-label" for="inlineRadio1" sytle="widt:500px; weight:500px">1
                    </label>
                    <div >
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </div>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="recomendacion" value="2" id="recomendacion">
                    <label class="form-check-label" for="inlineRadio1">2
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="recomendacion" value="3" id="recomendacion">
                    <label class="form-check-label" for="inlineRadio1">3
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="recomendacion" value="4" id="recomendacion">
                    <label class="form-check-label" for="inlineRadio1">4
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="recomendacion" value="5" id="recomendacion">
                    <label class="form-check-label" for="inlineRadio1">5
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="recomendacion" value="6" id="recomendacion">
                    <label class="form-check-label" for="inlineRadio1">6
                        <i class="far fa-frown fa-lg" style="background-color:rgb(255, 36, 0); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="recomendacion" value="7" id="recomendacion">
                    <label class="form-check-label" for="inlineRadio1">7
                        <i class="far fa-meh fa-lg" style="background-color:#f8961e; width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="recomendacion" value="8" id="recomendacion">
                    <label class="form-check-label" for="inlineRadio1">8
                        <i class="far fa-meh fa-lg" style="background-color:#f8961e; width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="recomendacion" value="9" id="recomendacion">
                    <label class="form-check-label" for="inlineRadio1">9
                        <i class="far fa-smile fa-lg" style="background-color:rgb(68, 148, 74); width:10; height:10;"></i>
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="recomendacion" value="10" id="recomendacion">
                    <label class="form-check-label" for="inlineRadio1">10
                        <i class="far fa-smile fa-lg" style="background-color:rgb(68, 148, 74); width:10; height:10;"></i>
                    </label>
                </div>
            </div>
            </div>
        </div>
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
