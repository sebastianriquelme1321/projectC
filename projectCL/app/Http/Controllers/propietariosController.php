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
<<<<<<< HEAD
        $datos['propietarios']= Propietarios::paginate(5);
        return view('propietario.index',$datos);
=======
        $datos['propietarios']=propietarios::paginate(5);

        return view('Propietario/index',$datos);

<<<<<<< HEAD
        
=======
>>>>>>> 454946bb9dfd7e92fce8290ed61b56f59c987f47
>>>>>>> 10e09ee283e8fb6a9584120a55dcab325333e72e
    }

    /**
     * Show the form for creating a new resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
<<<<<<< HEAD
        return view('propietario/create');
=======
        return view('Propietario/create');

>>>>>>> 454946bb9dfd7e92fce8290ed61b56f59c987f47
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
        return response()->json($datosPropietario );
        

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
        //
        $empleado=Propietarios::findOrFail($ID_prop);
        return view('propietarios.edit', compact('propietario'));
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
<<<<<<< HEAD
        Propietarios::destroy($ID_prop);
        
        return redirect('propietarios');
=======
        //
        propietarios::destroy($ID_prop);
        return redirect('/Propietarios/');
        
>>>>>>> 454946bb9dfd7e92fce8290ed61b56f59c987f47
    }
}