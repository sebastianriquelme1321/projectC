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
    {   $viewpagos=Array();
        $propietariob=propietarios::where("id","=",Auth::user()->id)->get()->toJson();
        $propietariob=json_decode($propietariob);
     
        
        if(count($propietariob)!=0)
        {
            $dpto=Departamento::where("ID_prop","=",$propietariob[0]->ID_prop)->get()->toJson();
            $dptomostrar=Departamento::where("ID_prop","=",$propietariob[0]->ID_prop)->get()->toJson();
        
            $dptomostrar=json_decode($dptomostrar);
            $buscar=Array();
             foreach($dptomostrar as $mos)
            {
           
            $pago=Pagos::where("ID_dept","=",$mos->ID_dept)->get()->toJson();
            array_push($buscar,$pago);

            }
          
       
           foreach($buscar as $mostrar)
          {
           
           
           $xd=json_decode ($mostrar);
           foreach($xd as $coxis)
           {
               array_push($viewpagos,$coxis);
           }
         

           
           
           
        }

        }else{
        
         $dptomostrar="no hay";
        

        }
    

        
     
        return view('users.pagos.pagos',compact('viewpagos'), compact('dptomostrar')); 
    }

        
}
