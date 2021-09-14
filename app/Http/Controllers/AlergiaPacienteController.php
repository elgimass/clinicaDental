<?php

namespace App\Http\Controllers;

use App\Models\AlergiaPaciente;
use App\Models\Alergia;
use App\Models\Paciente;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AlergiaPacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datos_paciente = Paciente::all();
        $datos_alergia = Alergia::all();

        $texto = trim($request->get('texto'));
        $alergia_pacientes = DB::table('alergia_pacientes')
            ->join('pacientes', 'alergia_pacientes.paciente_id', '=', 'pacientes.id')
            ->join('alergias', 'alergia_pacientes.alergia_id', '=', 'alergias.id')
            ->select('alergia_pacientes.*','pacientes.nombre')
            ->select('alergia_pacientes.*','alergias.nombre')
            ->orWhere('alergia_pacientes.id','LIKE','%'.$texto.'%')
            ->orWhere('pacientes.nombre','LIKE','%'.$texto.'%')
            ->orWhere('alergias.nombre','LIKE','%'.$texto.'%')
            ->orderBy('pacientes.nombre','asc')
            ->paginate(7);


        return view('AlergiaPaciente.index',compact('alergia_pacientes','texto'),[
            'pacientes'  => $datos_paciente,
            'alergias' => $datos_alergia
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
        $datos_alergia = Alergia::all();
        return view('AlergiaPaciente.create',[
            'pacientes'  => $datos_paciente,
            'alergias' => $datos_alergia
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
        $datosalergia = request()->except('_token');
        AlergiaPaciente::insert($datosalergia);
        return redirect('alergia');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AlergiaPaciente  $alergiaPaciente
     * @return \Illuminate\Http\Response
     */
    public function show($id,  Request $request)
    {
        $pacientes=Paciente::findOrFail($id);
        $datos_alergia = Alergia::all();

        $texto = trim($request->get('texto'));
        $alergia_pacientes = DB::table('alergia_pacientes')
            ->join('pacientes', 'alergia_pacientes.paciente_id', '=', 'pacientes.id')
            ->select('alergia_pacientes.*','pacientes.nombre')
            ->orWhere('alergia_pacientes.id','LIKE','%'.$texto.'%')
            ->orWhere('pacientes.nombre','LIKE','%'.$texto.'%')
            ->paginate(7);


        return view('AlergiaPaciente.alergiaIndex',compact('pacientes','alergia_pacientes'), [
            'texto' => $texto,
            'alergias' => $datos_alergia
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AlergiaPaciente  $alergiaPaciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos_paciente = Paciente::all();
        $datos_alergia = Alergia::all();
        $datosalergia=AlergiaPaciente::findOrFail($id);
        return view('AlergiaPaciente.edit',compact('datosalergia'),[
            'pacientes'  => $datos_paciente,
            'alergias' => $datos_alergia
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AlergiaPaciente  $alergiaPaciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosalergia = request()->except(['_token','_method']);
        AlergiaPaciente::where('id','=',$id)->update($datosalergia);

        return redirect('alergia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlergiaPaciente  $alergiaPaciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AlergiaPaciente::destroy($id);
        return redirect('alergia');
    }
}
