<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Historial;
use App\Models\logPaciente;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $pacientes = DB::table('pacientes')
                ->select('id','nombre','edad','direccion','telefono','ocupacion','referido')
                ->where('nombre','LIKE','%'.$texto.'%')
                ->orWhere('id','LIKE','%'.$texto.'%')
                ->orderBy('nombre','desc')
                ->paginate(7);

        return view('paciente.index',compact('pacientes','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosPaciente = request()->except('_token', 'tiempoInicio');


        $dataCurrentHour = request()->except('_token', 'nombre', 'edad', 'direccion', 'telefono', 'ocupacion', 'referido');

        logPaciente::insert($dataCurrentHour);

        $tablaLogPacienteIdHoraInicio = DB::table('log_pacientes')
                                        ->max('id');

        $tablaLogPacienteHoraInicio = DB::table('log_pacientes')
        ->select('tiempoInicio')
        ->where('id', '=', $tablaLogPacienteIdHoraInicio)->get();


        date_default_timezone_set('America/Guatemala');
        $tiempoFinal = date('H:i:s');

        $start = new DateTime($tablaLogPacienteHoraInicio[0]->tiempoInicio);
        $end = new DateTime($tiempoFinal);

        $tiempoResultado = $end -> diff($start)->format("%H:%I:%S");

        $datosLogPaciente = array(
            'tiempoInicio' => $tablaLogPacienteHoraInicio[0]->tiempoInicio ,
            'tiempoFinal' => $tiempoFinal,
            'tiempoResultado' => $tiempoResultado
        );

        logPaciente::where('id','=', $tablaLogPacienteIdHoraInicio)->update($datosLogPaciente);

        Paciente::insert($datosPaciente);


        return redirect('paciente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente=Paciente::findOrFail($id);
        return view('paciente.edit',compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPaciente = request()->except(['_token','_method']);
        Paciente::where('id','=',$id)->update($datosPaciente);

        return redirect('paciente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paciente::destroy($id);
        return redirect('paciente');
    }
}
