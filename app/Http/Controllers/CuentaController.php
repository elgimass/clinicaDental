<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use App\Models\Paciente;
use App\Models\Tratamiento;
use App\Models\cuentaTotal;
use CuentaTotal as GlobalCuentaTotal;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datos_tratamiento = Tratamiento::all();
        $datos_paciente = Paciente::all();
        $texto = trim($request->get('texto'));
        $cuentas = DB::table('cuentas')
            ->join('pacientes', 'cuentas.paciente_id', '=', 'pacientes.id')
            ->select('cuentas.*','pacientes.nombre')
            ->where('cuentas.fecha','LIKE','%'.$texto.'%')
            ->orWhere('cuentas.id','LIKE','%'.$texto.'%')
            ->orWhere('pacientes.nombre','LIKE','%'.$texto.'%')
            ->orderBy('paciente_id','desc')
            ->paginate(7);



        return view('cuenta.index',compact('cuentas','texto'),[
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
        return view('Cuenta.create',[
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
        $datoscuenta = request()->except('_token');
        // $datosabono = request()->except('paciente_id','tratamiento_id','fecha','pieza','abonos','_token');
        // $datoscargo = request()->except('paciente_id','tratamiento_id','fecha','pieza','cargos','_token');


        // $idDatosCuenta = number_format($datoscuenta['paciente_id']);

        // $datosCuentaTotal = CuentaTotal::all();
        // $datosCuentaTotal = CuentaTotal::all();




        $datoscuentatotal = DB::table('cuenta_totals')
        ->where('cuenta_totals.paciente_id', '=', $datoscuenta['paciente_id'])
        ->select('cuenta_totals.*') -> get();





        if(sizeof($datoscuentatotal) !== 0){

            $calcularTotalCargos = $datoscuenta['cargos'] + $datoscuentatotal[0] -> totalCargos;



            $calcularTotalAbonos = $datoscuenta['abonos'] + $datoscuentatotal[0] -> totalAbonos;

            $totalDeuda = $calcularTotalCargos - $calcularTotalAbonos;

            $data = [
                'paciente_id' => $datoscuenta['paciente_id'],
                'totalCargos' => $calcularTotalCargos,
                'totalAbonos' => $calcularTotalAbonos,
                'deuda' => $totalDeuda
            ];

            Cuenta::insert($datoscuenta);

            cuentaTotal::where('paciente_id','=', $datoscuenta['paciente_id'])->update($data);



            return redirect('cuenta');

        }else {

            $paciente = $datoscuenta['paciente_id'];
            $cargo = $datoscuenta['cargos'];
            $abono = $datoscuenta['abonos'];
            $deuda = $cargo - $abono;

            $data = [
                    'paciente_id' => $paciente,
                    'totalCargos' => $cargo,
                    'totalAbonos' => $abono,
                    'deuda' => $deuda
                ];

                Cuenta::insert($datoscuenta);

                cuentaTotal::insert($data);

                return redirect('cuenta');
        }


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
