<?php

namespace App\Http\Controllers;

use App\Models\JefeDeHogar;
use App\Models\Departamento;
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
        $departamentos = Departamento::all();
        //
        return view('jefehogar/create', compact('departamentos'));
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
            'ID_dept' => 'required|numeric',
            'Rut_jefe' => 'required|regex:/^\d{1,2}.\d{3}.\d{3}[-][0-9kK]{1}$/',
            'Nombre'   => 'required|string|max:30',
            'Apellido'   => 'required|string|max:30',
            'Fono'     => 'required|digits:9',
            'Correo'   => 'required|string|max:60|email'
        ];
        $Mensaje=[
            "numeric"=> 'El ID del departamento debe ser un numero',
            "email"=>'El Correo ingresado es invalido',
            "digits"=>'El Fono debe tener 9 digitos',
            "Rut_jefe.regex"=> 'El Rut debe ser valido',
            "ID_dept.required"=>'El ID del departamento es requerido',
            "Rut_jefe.required"=>'El Rut es requerido',
            "Nombre.required"=>'El Nombre es requerido',
            "Apellido.required"=>'El Apellido es requerido',
            "Fono.required"=>'El Fono es requerido',
            "Correo.required"=>'El Correo es requerido'   
        ];
        $this->validate($request,$campos,$Mensaje);
    
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
        $campos=[
            'ID_dept' => 'required|numeric',
            'Rut_jefe' => 'required|regex:/^\d{1,2}.\d{3}.\d{3}[-][0-9kK]{1}$/',
            'Nombre'   => 'required|string|max:30',
            'Apellido'   => 'required|string|max:30',
            'Fono'     => 'required|digits:9',
            'Correo'   => 'required|string|max:60|email'
        ];
        $Mensaje=[
            "numeric"=> 'El ID del departamento debe ser un numero',
            "email"=>'El Correo ingresado es invalido',
            "digits"=>'El Fono debe tener 9 digitos',
            "Rut_jefe.regex"=> 'El Rut debe ser valido',
            "ID_dept.required"=>'El ID del departamento es requerido',
            "Rut_jefe.required"=>'El Rut es requerido',
            "Nombre.required"=>'El Nombre es requerido',
            "Apellido.required"=>'El Apellido es requerido',
            "Fono.required"=>'El Fono es requerido',
            "Correo.required"=>'El Correo es requerido'   
        ];
        $this->validate($request,$campos,$Mensaje);
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
