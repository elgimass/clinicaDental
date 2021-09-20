@extends('adminlte::page')

@section('title', 'Clinica Dental')

@section('content_header')
    <h1>DashBoard</h1>

@stop

@section('content')

<!DOCTYPE HTML>
<html>
<head>
<script>

var dataTratamientosMasUsados = [
    @foreach ($row as $key => $item )
        { y: {{ $item -> count }}, label: " {{ $item -> tratamiento }}"},
    @endforeach

]




window.onload = function() {

//grafica de pastel de tratamientos mas usados
    var charts = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: "Tratamientos Más Solicitados"
	},
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}",
		dataPoints: dataTratamientosMasUsados
        	}]
});
charts.render();

/*
//grafica de barras
var chart = new CanvasJS.Chart("chartContainers", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "NPS"
	},


	data: [{
		type: "column",
		yValueFormatString: "#,##0.0#\"%\"",
		dataPoints: dataTratamientosMasUsados
	}]
});
chart.render();*/

}




</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<br>
<br>
<br>
<br>
<div id="chartContainers" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
    <script> console.log('Hi!'); </script>

@stop
