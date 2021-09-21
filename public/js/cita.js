
$(document).ready(function(){

    $('#paciente_id').on('click', function(){

        var fechaActual = new Date();
        var horaActualCita = fechaActual.getHours()+":"+fechaActual.getMinutes()+":"+fechaActual.getSeconds();

        $('#horaActualCita').val(horaActualCita);

        var datoFechaActual  = document.getElementById('horaActualCita');

        console.log('hora actual', datoFechaActual.value);

    })
});
