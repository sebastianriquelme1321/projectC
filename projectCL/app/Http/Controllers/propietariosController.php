<?php

namespace App\Http\Controllers;

use App\Models\Propietarios;
use Illuminate\Http\Request;

class PropietariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['propietarios']=Propietarios::paginate(5);

        return view('propietario/index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('propietario/create');

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
        $datosPropietario=request()->all();
        $datosPropietario=$request->except('_token');
        propietarios::insert($datosPropietario);
        return redirect('/propietarios');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propietarios  $propietarios
     * @return \Illuminate\Http\Response
     */
    public function show(Propietarios $propietarios)
    {
        //
    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propietarios  $propietarios
     * @return \Illuminate\Http\Response
     */
    public function edit($ID_prop)
    {
        $propietario=propietarios::findOrFail($ID_prop);

        return view('propietario/edit',compact('propietario'));
    }


    public function update(Request $request,$ID_prop)
    {
        $datosPropietario=$request->except(['_token','_method']);
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
        //
        propietarios::destroy($ID_prop);
        return redirect('/propietarios');
        
    }
    
}