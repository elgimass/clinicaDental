<?php

namespace App\Http\Controllers;

use App\Models\cuentaTotal;
use App\Models\Paciente;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CuentaTotalController extends Controller
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
        $cuentas = DB::table('cuenta_totals')
            ->join('pacientes', 'cuenta_totals.paciente_id', '=', 'pacientes.id')
              ->select('cuenta_totals.*','pacientes.nombre')
              ->Where('cuenta_totals.id','LIKE','%'.$texto.'%')
              ->orWhere('pacientes.nombre','LIKE','%'.$texto.'%')
              ->paginate(7);



        return view('cuentaTotal.index',compact('cuentas','texto'),[
            'pacientes'  => $datos_paciente,
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cuentaTotal  $cuentaTotal
     * @return \Illuminate\Http\Response
     */
    public function show(cuentaTotal $cuentaTotal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cuentaTotal  $cuentaTotal
     * @return \Illuminate\Http\Response
     */
    public function edit(cuentaTotal $cuentaTotal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cuentaTotal  $cuentaTotal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cuentaTotal $cuentaTotal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cuentaTotal  $cuentaTotal
     * @return \Illuminate\Http\Response
     */
    public function destroy(cuentaTotal $cuentaTotal)
    {
        //
    }
}
