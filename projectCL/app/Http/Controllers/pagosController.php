<?php

namespace App\Http\Controllers;

use App\Models\Pagos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class pagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['pagos']= Pagos::paginate();
        return view('pagos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pagos/create');
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

        if($request->hasFile('ComprobanteIMG')){

            $datospago['ComprobanteIMG']=$request->file('ComprobanteIMG')->store('uploads','public');

        }

        pagos::insert($datospago);
        return redirect('pagos');  

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pagos  $pago
     * @return \Illuminate\Http\Response
     */
    public function show($ID_pagos)
    {       
        //
        $datosVERMAS = pagos::find($ID_pagos);       
        return view('pagos.show', compact('datosVERMAS'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pagos  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit($ID_pagos)
    {
        //
        $pago=Pagos::findOrFail($ID_pagos);
        return view('pagos.edit', compact('pago'));
    }

    public function update(Request $request,$ID_pagos)
    {
        //
        $datospago=$request->except(['_token','_method']);        

        if($request->hasFile('ComprobanteIMG')){

            $datospago['ComprobanteIMG']=$request->file('ComprobanteIMG')->store('uploads','public');
            
        }

        pagos::where('ID_pagos','=',$ID_pagos)->update($datospago);
        
        return redirect('pagos'); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pagos  $pago
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pagos  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID_pagos)
    {
        Pagos::destroy($ID_pagos);
        
        return redirect('pagos');
    }
}
