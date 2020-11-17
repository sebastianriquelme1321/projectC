<?php

namespace App\Http\Controllers;

use App\Models\JefeDeHogar;
use Illuminate\Http\Request;

class jefe_de_hogarController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['jefe_de_hogars']= JefeDeHogar::paginate();
        return view('jefehogar.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jefehogar/create');
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
        $datosJefe=request()->all();
        $datosJefe=$request->except('_token');
        JefeDeHogar::insert($datosJefe);
        return redirect('jefe_de_hogar');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JefeDeHogar  $jefe_de_hogar
     * @return \Illuminate\Http\Response
     */
    public function show($ID_jefe)
    {       
        //
        $datosVERMAS = JefeDeHogar::find($ID_jefe);       
        return view('jefehogar.show', compact('datosVERMAS'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JefeDeHogar  $jefe_de_hogar
     * @return \Illuminate\Http\Response
     */
    public function edit($ID_jefe)
    {
        //
        $jefe_de_hogar=JefeDeHogar::findOrFail($ID_jefe);
        return view('jefehogar.edit', compact('jefe_de_hogar'));
    }

    public function update(Request $request,$ID_jefe)
    {
        $datosJefe=$request->except(['_token','_method']);
        jefeDeHogar::where('ID_jefe','=',$ID_jefe)->update($datosJefe);
        return redirect('jefe_de_hogar');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JefeDeHogar  $jefe_de_hogar
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JefeDeHogar  $jefe_de_hogar
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID_jefe)
    {
        JefeDeHogar::destroy($ID_jefe);
        
        return redirect('jefe_de_hogar');
    }
}
