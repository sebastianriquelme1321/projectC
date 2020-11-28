<?php

namespace App\Http\Controllers;

use App\Models\Estacionamiento;
use App\Models\Propietarios;
use Illuminate\Http\Request;

class estacionamientosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['estacionamientos']= Estacionamiento::paginate();
        $listaprop=Propietarios::all();
        return view('estacionamiento.index',$datos,compact('listaprop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listaprop=Propietarios::all();
        return view('estacionamiento/create',compact('listaprop'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'ID_prop' => 'required|numeric',
            'Numero' => 'required|numeric'
        ];
    
        $Mensaje=[
            
            "ID_prop.required" => 'El ID del propietario es requerido',
            "Numero.required" => 'El Numero del estacionamiento es requerido',
            "ID_prop.numeric"=>'El ID del propietario tiene que ser un numero',
            "Numero.numeric"=>'El  es requerido'   
        ];
        $this->validate($request,$campos,$Mensaje);

        $datosDepartamento=$request->except('_token');
        Estacionamiento::insert($datosDepartamento);
        return redirect('estacionamiento');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\estacionamiento  $estacionamiento
     * @return \Illuminate\Http\Response
     */
    public function show($ID_est)
    {
        $datosVERMAS = Estacionamiento::find($ID_est);       
        return view('estacionamiento.show', compact('datosVERMAS'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\estacionamiento  $estacionamiento
     * @return \Illuminate\Http\Response
     */
    public function edit($ID_est)
    {
        //
        $listaprop=Propietarios::all();
        $estacionamiento=Estacionamiento::findOrFail($ID_est);

        return view('estacionamiento.edit', compact('estacionamiento'),compact('listaprop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estacionamiento  $estacionamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$ID_est)
    {
        $campos=[
            'ID_prop' => 'required|numeric',
            'Numero' => 'required|numeric'
        ];
    
        $Mensaje=[
            
            "ID_prop.required" => 'El ID del propietario es requerido',
            "Numero.required" => 'El Numero del estacionamiento es requerido',
            "ID_prop.numeric"=>'El ID del propietario tiene que ser un numero',
            "Numero.numeric"=>'El  es requerido'   
        ];
        $this->validate($request,$campos,$Mensaje);

        //
        $datosEstacionamiento=$request->except(['_token','_method']);
        Estacionamiento::where('ID_est','=',$ID_est)->update($datosEstacionamiento);
        return redirect('estacionamiento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\estacionamiento  $estacionamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID_est)
    {
        //
        Estacionamiento::destroy($ID_est);
        return redirect('estacionamiento');
    }
}