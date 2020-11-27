<?php

namespace App\Http\Controllers;

use App\Models\Pagos;
use App\Models\Departamento;
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
        $departamentos = Departamento::all();
        //
        return view('pagos/create', compact('departamentos'));
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
        
        $campos=[
            'ID_dept'=>'required|numeric',
            'Monto'=> 'required|numeric',
            'Monto_deuda'=> 'required|numeric',
            'Fecha_de_pago'   => 'date',
            'Mes_de_pago' => 'date',
            'ComprobanteIMG' => 'required|max:10000|mimes:jpeg,png,jpg',
            'Detalle' => 'required|string|max:100'
        ];
        
        
        $Mensaje=[
            "ID_dept.required"=>'El ID de departamento es requerido',
            "Monto.required"=>'El Monto es requerido',
            "Monto_deuda.required"=>'El Monto Deuda es requerido',
            "ComprobanteIMG.required"=>'La Imagen del Comprobante es requerida',
            "ID_dept.numeric"=> 'El ID del departamento debe ser un numero',
            "Monto.numeric"=> 'El Monto debe ser un numero',
            "Monto_deuda.numeric"=> 'El Monto Deuda debe ser un numero',
            "date"=>'La Fecha es invalida',
            "Detalle.required" => 'El Detalle es requerido'

        ];
        $this->validate($request,$campos,$Mensaje);

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
        $listadepartamentos = Departamento::all();
        //
        $pago=Pagos::findOrFail($ID_pagos);
        return view('pagos.edit', compact('pago'),compact('listadepartamentos'));
    }

    public function update(Request $request,$ID_pagos)
    {
        //
        $campos=[
            'ID_dept'=>'required|numeric',
            'Monto'=> 'required|numeric',
            'Monto_deuda'=> 'required|numeric',
            'Fecha_de_pago'   => 'date',
            'Mes_de_pago' => 'date',           
            'Detalle' => 'required|string|max:100'
            
        ];
        
        if($request->hasFile('ComprobanteIMG')){

            $campos+= ['ComprobanteIMG' => 'required|max:10000|mimes:jpeg,png,jpg'];

        }
        
        $Mensaje=[
            "ID_dept.required"=>'El ID de departamento es requerido',
            "Monto.required"=>'El Monto es requerido',
            "Monto_deuda.required"=>'El Monto Deuda es requerido',            
            "ID_dept.numeric"=> 'El ID del departamento debe ser un numero',
            "Monto.numeric"=> 'El Monto debe ser un numero',
            "Monto_deuda.numeric"=> 'El Monto Deuda debe ser un numero',
            "date"=>'La Fecha es invalida',
            "Detalle.required" => 'El Detalle es requerido'
        ];


        $this->validate($request,$campos,$Mensaje);

        $datospago=$request->except(['_token','_method']);        
        if($request->hasFile('ComprobanteIMG')){

            $pago=Pagos::findOrFail($ID_pagos); 

            Storage::delete('public/'.$pago->ComprobanteIMG);

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
