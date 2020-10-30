<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class departamentosController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['departamentos']= Departamento::paginate(5);
        return view('departamento.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('departamento/create');
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
        $datosDepartamento=request()->all();
        $datosDepartamento=$request->except('_token');
        departamento::insert($datosDepartamento);
        return redirect('departamento');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show($ID_dept)
    {       
        //
        $datosVERMAS = departamento::find($ID_dept);       
        return view('departamento.show', compact('datosVERMAS'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit($ID_dept)
    {
        //
        $departamento=Departamento::findOrFail($ID_dept);
        return view('departamento.edit', compact('departamento'));
    }

    public function update(Request $request,$ID_dept)
    {
        $datosDepartamento=$request->except(['_token','_method']);
        departamento::where('ID_dept','=',$ID_dept)->update($datosDepartamento);
        return redirect('departamento');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID_dept)
    {
        Departamento::destroy($ID_dept);
        
        return redirect('departamento');
    }
}
