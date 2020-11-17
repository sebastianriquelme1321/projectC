<?php

namespace App\Http\Controllers;

use App\Models\Estacionamiento;
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
        $datos['estacionamientos']= Estacionamiento::paginate(5);
        return view('estacionamiento.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estacionamiento/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosDepartamento=request()->all();
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
        $estacionamiento=Estacionamiento::findOrFail($ID_est);
        return view('estacionamiento.edit', compact('estacionamiento'));
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