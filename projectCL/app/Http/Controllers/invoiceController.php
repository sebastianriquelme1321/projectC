<?php

namespace App\Http\Controllers;

use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use App\Models\Propietarios;
use Illuminate\Support\Facades\Auth;
use App\Models\Pagos;

class invoiceController extends Controller
{
    public function show($ID_pagos)
    {
        $propietariob=propietarios::where("id","=",Auth::user()->id)->get()->toJson();
        $propietariob=json_decode($propietariob);
        $pago=Pagos::find($ID_pagos);
       

        $customer = new Buyer([
            'name'          => Auth()->user()->name,
            'custom_fields' => [
                'email' => auth()->user()->email,
                'Fecha de pago' => $pago->Fecha_de_pago,
            ],
        ]);
        
        $date = \Carbon\Carbon::now()->locale('es');
        $date->translatedFormat('g:i a l jS F Y');
 

    

        $item = (new InvoiceItem())->title($date)->pricePerUnit($pago->Monto);
        $item_deuda = (new InvoiceItem())->title($date)->pricePerUnit($pago->Monto_deuda);
        

        $invoice=Invoice::make()
            ->buyer($customer)
            ->addItem($item)
            ->sequence($ID_pagos)
            ->logo(public_path('/vendor/adminlte/dist/img/LogoProyecto2.png'));
           

        return $invoice->stream();

    }
    
}
