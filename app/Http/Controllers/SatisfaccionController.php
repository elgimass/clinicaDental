<?php

namespace App\Http\Controllers;

use App\Models\Satisfaccion;
use App\Models\Paciente;
use App\Models\Tratamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SatisfaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datos_paciente = Paciente::all();


        $texto = trim($request->get('texto'));
        $satisfaccions = DB::table('satisfaccions')
            ->join('pacientes', 'satisfaccions.paciente_id', '=', 'pacientes.id')
            ->select('satisfaccions.*','pacientes.nombre')
            ->orWhere('satisfaccions.id','LIKE','%'.$texto.'%')
            ->orWhere('pacientes.nombre','LIKE','%'.$texto.'%')
            ->paginate(7);




        return view('Satisfaccion.index',compact('satisfaccions','texto'),[
            'pacientes'  => $datos_paciente
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
        return view('Satisfaccion.create',[
            'pacientes'  => $datos_paciente
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
        $datossatisfaccion = request()->except('_token');
        Satisfaccion::insert($datossatisfaccion);
        return redirect('satisfaccion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Satisfaccion  $satisfaccion
     * @return \Illuminate\Http\Response
     */
    public function show($id,  Request $request)
    {
        $pacientes=Paciente::findOrFail($id);
        $datos_tratamiento = Tratamiento::all();

        $texto = trim($request->get('texto'));
        $satisfaccions = DB::table('satisfaccions')
            ->join('pacientes', 'satisfaccions.paciente_id', '=', 'pacientes.id')
            ->select('satisfaccions.*','pacientes.nombre')
            ->where('satisfaccions.fecha','LIKE','%'.$texto.'%')
            ->orWhere('satisfaccions.id','LIKE','%'.$texto.'%')
            ->orWhere('pacientes.nombre','LIKE','%'.$texto.'%')
            ->paginate(7);

        // return $historiales;
        return view('Satisfaccion.indexSatisfaccion',compact('pacientes','satisfaccions'), [
            'texto' => $texto,
            'tratamientos' => $datos_tratamiento
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Satisfaccion  $satisfaccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Satisfaccion $satisfaccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Satisfaccion  $satisfaccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Satisfaccion $satisfaccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Satisfaccion  $satisfaccion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Satisfaccion::destroy($id);
        return redirect('satisfaccion');
    }
}
