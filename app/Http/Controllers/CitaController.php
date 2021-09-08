<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Tratamiento;
use App\Models\Paciente;
use App\Models\Historial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datos_paciente = Paciente::all();
        $datos_tratamiento = Tratamiento::all();

        $texto = trim($request->get('texto'));
        $citas = DB::table('citas')
            ->join('pacientes', 'citas.paciente_id', '=', 'pacientes.id')
            ->select('citas.*','pacientes.nombre')
            ->where('citas.fecha','LIKE','%'.$texto.'%')
            ->orWhere('citas.id','LIKE','%'.$texto.'%')
            ->orWhere('pacientes.nombre','LIKE','%'.$texto.'%')
            ->orderBy('fecha','desc')
            ->paginate(7);




        return view('cita.index',compact('citas','texto'),[
            'pacientes'  => $datos_paciente,
            'tratamientos' => $datos_tratamiento
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos_paciente = Paciente::all();
        $datos_tratamiento = Tratamiento::all();
        return view('Cita.create',compact([
            'tratamientos' => $datos_tratamiento,
            'pacientes'  => $datos_paciente

        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $datoscita = request()->except('_token');
        Cita::insert($datoscita);


        $datoshistorial = request()->except('hora','formaPago','_token');


        Historial::insert($datoshistorial);




        return redirect('cita');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       // $datoscita=Cita::findOrFail($id);
       // $datos_paciente = Paciente::all();
        $datos_tratamiento = Tratamiento::all();
        //dd($id);
        // $datos_paciente = DB::table('pacientes')
        //     ->select('nombre')
        //     ->where('id', '=', $datoscita['paciente_id'])
        //     ->get();

        // $datos_tratamiento = DB::table('tratamientos')
        //     ->select('nombre')
        //     ->where('id', '=', $datoscita['tratamiento_id'])
        //     ->get();
        $citas = DB::table('citas')
        ->join('pacientes', 'citas.paciente_id', '=', 'pacientes.id')
        ->join('tratamientos','citas.tratamiento_id','=','tratamientos.id')
          ->select('citas.*','pacientes.nombre as paciente','tratamientos.nombre as tratamiento')
          ->where('citas.id','=',$id)
          ->get();




     return view('cita.edit',compact('citas'),[
        'tratamientos' => $datos_tratamiento
     ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datoscita = request()->except(['_token','_method']);
        Cita::where('id','=',$id)->update($datoscita);
        //$datoshistorial = request()->except(['hora','formaPago','_token','_method']);
        //Historial::where('id','=',$id)->update($datoshistorial);




        return redirect('cita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cita::destroy($id);
        return redirect('cita');
    }
}
