<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;

use Carbon\Carbon;

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
                'Fecha' => $pago->Monto,
            ],
        ]);
        
        setlocale(LC_ALL, 'es_ES');
        $fecha = Carbon::parse();
        $fecha->format("F"); // Inglés.
        $mes = $fecha->formatLocalized('%B');// mes en idioma español

    

        $item = (new InvoiceItem())->title($mes)->pricePerUnit($pago->Monto);

        $invoice = Invoice::make()
            ->buyer($customer)
            ->addItem($item)
            ->sequence($ID_pagos)
            ->logo(public_path('/vendor/adminlte/dist/img/LogoProyecto2.png'));
           

        return $invoice->stream();

    }
    
}
