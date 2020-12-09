<?php

namespace App\Http\Controllers;

use App\Models\Propietarios;
use Illuminate\Http\Request;
use Freshwork\ChileanBundle\Rut;
use App\Models\User;
use App\Models\Departamento;

class PropietariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['propietarios']= Propietarios::paginate();
        return view('propietario.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::all();
        return view('propietario/create',compact('users'));
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
            'Rut_prop' => 'required|cl_rut|unique:propietarios,Rut_prop',
            'Nombre'   => 'required|string|max:100',
            'Fono'     => 'required|digits:9',            
            'Razon_Social' => 'nullable|string|max:100'
        ];
        $Mensaje=[
            "numeric"=> 'El Fono debe ser un numero',            
            "digits"=>'El Fono debe tener 9 digitos',
            "Rut_prop.cl_rut"=> 'El Rut debe ser valido',
            "Rut_prop.required"=>'El Rut es requerido',
            "Nombre.required"=>'El Nombre es requerido',
            "Fono.required"=>'El Fono es requerido',            
            "Rut_prop.unique"=> 'El Rut ya esta siendo utilizado'   
        ];
        $this->validate($request,$campos,$Mensaje);
        
        
        $datosPropietario=$request->except('_token');
        $datosPropietario['Rut_prop'] = Rut::parse($datosPropietario['Rut_prop'])->format(Rut::FORMAT_COMPLETE);
        propietarios::insert($datosPropietario);
        return redirect('propietarios');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propietarios  $propietarios
     * @return \Illuminate\Http\Response
     */
    public function show($ID_prop)
    {       
        //
        $users = User::all();
        $departamentos = Departamento::all(); 
        $datosVERMAS = propietarios::find($ID_prop);       
        return view('propietario.show', compact('datosVERMAS','users','departamentos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propietarios  $propietarios
     * @return \Illuminate\Http\Response
     */
    public function edit($ID_prop)
    {
        //
        $propietario=propietarios::findOrFail($ID_prop);
        $users = User::all();

        return view('propietario/edit',compact('propietario'),compact('users'));
    }

    public function update(Request $request,$ID_prop)
    {
        $campos=[
            'Rut_prop' => 'required|cl_rut',
            'Nombre'   => 'required|string|max:100',
            'Fono'     => 'required|digits:9',            
            'Razon_Social' => 'nullable|string|max:100'
        ];
        $Mensaje=[
            "numeric"=> 'El Fono debe ser un numero',            
            "digits"=>'El Fono debe tener 9 digitos',
            "Rut_prop.cl_rut"=> 'El Rut debe ser valido',
            "Rut_prop.required"=>'El Rut es requerido',
            "Nombre.required"=>'El Nombre es requerido',
            "Fono.required"=>'El Fono es requerido',              
        ];
        $this->validate($request,$campos,$Mensaje);


        $datosPropietario=$request->except(['_token','_method']);
        $datosPropietario['Rut_prop'] = Rut::parse($datosPropietario['Rut_prop'])->format(Rut::FORMAT_COMPLETE);
        propietarios::where('ID_prop','=',$ID_prop)->update($datosPropietario);
        return redirect('/propietarios');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propietarios  $propietarios
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propietarios  $propietarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID_prop)
    {
        Propietarios::destroy($ID_prop);
        
        return redirect('propietarios');
    }
}