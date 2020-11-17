<?php

namespace App\Http\Controllers;

use App\Models\Condominio;
use Illuminate\Http\Request;

class condominiosController extends Controller
{
    //
 

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['Condominios']= Condominio::paginate(5);
        return view('condominio.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('condominio/create');
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
        $datoscondominios=request()->all();
        $datoscondominios=$request->except('_token');
        Condominio::insert($datoscondominios);
        return redirect('condominio');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Condominio  $condominio
     * @return \Illuminate\Http\Response
     */
    public function show($ID_condominio)
    {       
        //
        $datosVERMAS = condominio::find($ID_condominio);       
        return view('condominio.show', compact('datosVERMAS'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Condominio $condominio
     * @return \Illuminate\Http\Response
     */
    public function edit($ID_condominio)
    {
        //
        $condominio=Condominio::findOrFail($ID_condominio);
        return view('condominio.edit', compact('condominio'));
    }

    public function update(Request $request,$ID_condominio)
    {
        $datoscondominios=$request->except(['_token','_method']);
        Condominio::where('ID_condominio','=',$ID_condominio)->update($datoscondominios);
        return redirect('condominio');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Condominio $condominio
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\condominios  $condominios
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID_condominio)
    {
        Condominio::destroy($ID_condominio);
        
        return redirect('condominio');
    }
}
