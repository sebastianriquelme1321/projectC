<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use App\Models\Propietarios;
use Illuminate\Support\Facades\Auth;

class invoiceController extends Controller
{
    public function show()
    {
        $propietariob=propietarios::where("id","=",Auth::user()->id)->get()->toJson();
        $propietariob=json_decode($propietariob);
        $customer = new Buyer([
            'name'          => $propietariob[0]->Nombre,
            'custom_fields' => [
                'email' => 'test@example.com',
            ],
        ]);

        $item = (new InvoiceItem())->title('Service 1')->pricePerUnit(2);

        $invoice = Invoice::make()
            ->buyer($customer)
            ->discountByPercent(10)
            ->taxRate(15)
            ->shipping(1.99)
            ->addItem($item);
           

        return $invoice->stream();

    }
    
}
