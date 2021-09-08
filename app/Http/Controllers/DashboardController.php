<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Paciente;
use App\Models\Tratamiento;
use App\Models\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $row = DB::table('citas')
        ->join('tratamientos','citas.tratamiento_id','=','tratamientos.id')
        ->select('citas.tratamiento_id','tratamientos.nombre as tratamiento',DB::raw("count(tratamientos.nombre) as count"))
        ->groupBy('citas.tratamiento_id')
        ->get();



        dd($row);

        $datos = array();
        foreach ($row as $key => $value) {
            $datos[] = $value -> count;
        }

        //dd($datos);

        //$datos_citas['citas'] = Cita::all();
        //return view('Dashboard.index', compact('row'));
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
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
