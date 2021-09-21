
$(document).ready(function(){

    $('#nombre').on('click', function(){

        var fechaActual = new Date();
        var horaActual = fechaActual.getHours()+":"+fechaActual.getMinutes()+":"+fechaActual.getSeconds();

        $('#horaActual').val(horaActual);

        var datoFechaActual  = document.getElementById('horaActual');

        console.log('hora actual', datoFechaActual.value);

    })
});
