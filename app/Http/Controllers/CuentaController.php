<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use App\Models\Paciente;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos_paciente['pacientes'] = Paciente::all();
        $datos['cuentas']=cuenta::paginate(10);
        return view('cuenta.index',$datos,$datos_paciente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos_paciente['pacientes'] = Paciente::all();
        return view('cuenta.create',$datos_paciente);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datoscuenta = request()->except('_token');
        Cuenta::insert($datoscuenta);
        return redirect('cuenta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function show(Cuenta $cuenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos_paciente['pacientes'] = Paciente::all();
        $cuenta=Cuenta::findOrFail($id);
        return view('cuenta.edit',compact('cuenta'),$datos_paciente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datoscuenta = request()->except(['_token','_method']);
        Cuenta::where('id','=',$id)->update($datoscuenta);

        return redirect('cuenta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cuenta::destroy($id);
        return redirect('cuenta');
    }
}
