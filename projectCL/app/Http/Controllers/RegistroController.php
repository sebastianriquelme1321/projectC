<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['registros']= Registro::paginate();
        return view('registro.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('registro/create');
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
        $datospago=request()->all();
        $datospago=$request->except('_token');
        registro::insert($datospago);
        return redirect('registro');  

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show($ID_registro)
    {       
        //
        $datosVERMAS = registro::find($ID_registro);       
        return view('registro.show', compact('datosVERMAS'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit($ID_registro)
    {
        //
        $registro=Registro::findOrFail($ID_registro);
        return view('registro.edit', compact('registro'));
    }

    public function update(Request $request,$ID_registro)
    {
        //
        $datospago=$request->except(['_token','_method']); 
        registro::where('ID_registro','=',$ID_registro)->update($datospago);
        return redirect('registro'); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID_registro)
    {
        Registro::destroy($ID_registro);
        
        return redirect('registro');
    }
}
