<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

use App\Models\Condominio;
use App\Models\Propietarios;

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

        $condominios =  Condominio::all();
        $propietarios = Propietarios::all();
        //
        return view('departamento/create', compact('condominios'), compact('propietarios'));
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
            'ID_condominio' => 'required|numeric',
            'ID_prop'   => 'required|numeric',
            'Numero'     => 'required|numeric',
            'Bloque'   => 'required|string|size:1|alpha',            
        ];
        $Mensaje=[
            "ID_condominio.numeric"=> 'El ID debe ser un numero',
            "ID_condominio.required"=> 'El ID es requerido',
            "ID_prop.numeric"=> 'El ID debe ser un numero',  
            "ID_prop.required"=> 'El ID es requerido', 
            "Numero.numeric"=> 'Debe ser un numero',
            "Numero.required"=> 'El Numero es requerido',
            "Bloque.size"=> 'Debe poseer 1 caracter',
            "Bloque.string"=> 'Debe ser caracter',
            "Bloque.alpha"=> 'Debe ser caracter',
            "Bloque.required"=> 'El Bloque es requerido',            
        ];

        $this->validate($request,$campos,$Mensaje);
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
        $propietarios = Propietarios::all();
        return view('departamento.show', compact('datosVERMAS'),compact('propietarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit($ID_dept)
    {
        
        $listaprop = propietarios::all();
    
        //
        $departamento=Departamento::findOrFail($ID_dept);
        return view('departamento.edit', compact('departamento'), compact('listaprop'));
    }

    public function update(Request $request,$ID_dept)
    {
      
        $campos=[
            
            'ID_prop'  => 'required|numeric',
            'Numero'   => 'required|numeric',
            'Bloque'   => 'required|string|size:1|alpha',            
        ];
        $Mensaje=[
            
            "ID_prop.numeric"=> 'El ID debe ser un numero',  
            "ID_prop.required"=> 'El ID es requerido', 
            "Numero.numeric"=> 'Debe ser un numero',
            "Numero.required"=> 'El Numero es requerido',
            "Bloque.size"=> 'Debe poseer 1 caracter',
            "Bloque.string"=> 'Debe ser caracter',
            "Bloque.alpha"=> 'Debe ser caracter',
            "Bloque.required"=> 'El Bloque es requerido',
        ];

        $this->validate($request,$campos,$Mensaje);

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