<?php

namespace App\Http\Controllers;

use App\Models\logPaciente;
use Illuminate\Http\Request;

class LogPacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $datosPaciente = request()->except('_token');
        dd($datosPaciente);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\logPaciente  $logPaciente
     * @return \Illuminate\Http\Response
     */
    public function show(logPaciente $logPaciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\logPaciente  $logPaciente
     * @return \Illuminate\Http\Response
     */
    public function edit(logPaciente $logPaciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\logPaciente  $logPaciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, logPaciente $logPaciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\logPaciente  $logPaciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(logPaciente $logPaciente)
    {
        //
    }
}
