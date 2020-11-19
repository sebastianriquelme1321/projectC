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
        $datos['Condominios']= Condominio::paginate();
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
        $campos=[
            'Region' => 'required|string|max:25',
            'Ciudad' => 'required|string|max:25',
            'Calle'  => 'required|string|max:100',
            'Numero' => 'required|numeric',
            'Rut_ad' => 'required|regex:/^\d{1,2}.\d{3}.\d{3}[-][0-9kK]{1}$/',
            'Nombre' => 'required|string|max:30',
            'Apellido' => 'required|string|max:30',
            'Fono'   => 'required|digits:9',
            'Correo' => 'required|string|max:60|email',
            'Password' => 'required|string|max:20',

        ];
        $Mensaje=[
            "numeric"=> 'Debe ser un numero',
            "digits" => 'El Fono debe ser un numero',
            "email"=>'El Correo ingresado es invalido',
            "digits"=>'El Fono debe tener 9 digitos',
            "Rut_ad.regex"=> 'El Rut debe ser valido',
            "Rut_ad.required"=>'El Rut es requerido',
            "Nombre.required"=>'El Nombre es requerido',
            "Fono.required"=>'El Fono es requerido',
            "Region.required"=>'La Region es requerida',
            "Ciudad.required"=>'La Ciudad es requerida',
            "Calle.required" =>'La Calle es requerida',
            "Numero.required"=>'El Numero es requerido',
            "Correo.required"=>'El Correo es requerido',
            "Password.required"=>'La Contraseña es requerida',
            "Apellido.required"=> 'El Apellido es requerido'
        ];
        $this->validate($request,$campos,$Mensaje);
 

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
        $campos=[
            'Region' => 'required|string|max:25',
            'Ciudad' => 'required|string|max:25',
            'Calle'  => 'required|string|max:100',
            'Numero' => 'required|numeric',
            'Rut_ad' => 'required|regex:/^\d{1,2}.\d{3}.\d{3}[-][0-9kK]{1}$/',
            'Nombre' => 'required|string|max:30',
            'Apellido' => 'required|string|max:30',
            'Fono'   => 'required|digits:9',
            'Correo' => 'required|string|max:60|email',
            'Password' => 'required|string|max:20',

        ];
        $Mensaje=[
            "numeric"=> 'Debe ser un numero',
            "digits" => 'El Fono debe ser un numero',
            "email"=>'El Correo ingresado es invalido',
            "digits"=>'El Fono debe tener 9 digitos',
            "Rut_ad.regex"=> 'El Rut debe ser valido',
            "Rut_ad.required"=>'El Rut es requerido',
            "Nombre.required"=>'El Nombre es requerido',
            "Fono.required"=>'El Fono es requerido',
            "Region.required"=>'La Region es requerida',
            "Ciudad.required"=>'La Ciudad es requerida',
            "Calle.required" =>'La Calle es requerida',
            "Numero.required"=>'El Numero es requerido',
            "Correo.required"=>'El Correo es requerido',
            "Password.required"=>'La Contraseña es requerida',
            "Apellido.required"=> 'El Apellido es requerido'
        ];
        $this->validate($request,$campos,$Mensaje);


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
