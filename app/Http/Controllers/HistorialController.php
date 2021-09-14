<?php

namespace App\Http\Controllers;

use App\Models\Historial;
use App\Models\Tratamiento;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistorialController extends Controller
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
        $historiales = DB::table('historials')
            ->join('pacientes', 'historials.paciente_id', '=', 'pacientes.id')
              ->select('historials.*','pacientes.nombre')
              ->where('historials.fecha','LIKE','%'.$texto.'%')
              ->orWhere('historials.id','LIKE','%'.$texto.'%')
              ->orWhere('pacientes.nombre','LIKE','%'.$texto.'%')
              ->orderBy('fecha','asc')
              ->paginate(7);




        return view('historial.index',compact('historiales','texto'),[
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
        return view('historial.create',[
            'pacientes'  => $datos_paciente,
            'tratamientos' => $datos_tratamiento
         ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datoshistorial = request()->except('_token');
        Historial::insert($datoshistorial);
        return redirect('historial');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function show($id,  Request $request)
    {
        $pacientes=Paciente::findOrFail($id);
        $datos_tratamiento = Tratamiento::all();

        $texto = trim($request->get('texto'));
        $historiales = DB::table('historials')
            ->join('pacientes', 'historials.paciente_id', '=', 'pacientes.id')
            ->select('historials.*','pacientes.nombre')
            ->where('historials.fecha','LIKE','%'.$texto.'%')
            ->orWhere('historials.id','LIKE','%'.$texto.'%')
            ->orWhere('pacientes.nombre','LIKE','%'.$texto.'%')
            ->orderBy('fecha','asc')
            ->paginate(7);

        // return $historiales;
        return view('historial.indexHistorial',compact('pacientes','historiales'), [
            'texto' => $texto,
            'tratamientos' => $datos_tratamiento
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos_tratamiento = Tratamiento::all();
        $historials = DB::table('historials')
        ->join('pacientes', 'historials.paciente_id', '=', 'pacientes.id')
        ->join('tratamientos','historials.tratamiento_id','=','tratamientos.id')
          ->select('historials.*','pacientes.nombre as paciente','tratamientos.nombre as tratamiento')
          ->where('historials.id','=',$id)
          ->get();



     return view('historial.edit',compact('historials'),[
        'tratamientos' => $datos_tratamiento
     ]);


    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datoshistorial = request()->except(['_token','_method']);
        Historial::where('id','=',$id)->update($datoshistorial);

        return redirect('historial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Historial::destroy($id);
        return redirect('historial');
    }
}
