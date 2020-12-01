<?php

namespace App\Http\Controllers;

use App\Models\Pagos;
use App\Models\Departamento;
use App\Models\Propietarios;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\Array_;

class userPagos extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propietariob=propietarios::where("id","=",Auth::user()->id)->pluck('ID_prop');
        $dpto=Departamento::where("ID_prop","=",$propietariob)->get()->toJson();
        $dptomostrar=Departamento::where("ID_prop","=",$propietariob)->get()->toJson();
        
        $dptomostrar=json_decode($dptomostrar);
        $buscar=Array();
        foreach($dptomostrar as $mos)
        {
           
            $pago=Pagos::where("ID_dept","=",$mos->ID_dept)->get()->toJson();
            array_push($buscar,$pago);

        }
        $viewpagos=Array();
       
        foreach($buscar as $mostrar)
        {
           
           
           $xd=json_decode ($mostrar);
           foreach($xd as $coxis)
           {
               array_push($viewpagos,$coxis);
           }
         

           
           
           
        }

    

        
     
        return view('users.pagos.pagos',compact('viewpagos'), compact('dptomostrar')); 
    }

        
}