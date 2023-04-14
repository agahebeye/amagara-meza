<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Patient;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\ApiResource;

#[Prefix('v1')]
#[ApiResource(
    resource: 'invoices',
    names: 'api.v1.invoices'
)]
class InvoiceController
{
    public function index()
    {
        $patients = Patient::select('id', 'first_name', 'last_name')
            ->with('latestInvoice.items');

        return datatables($patients)->toJson();
    }

    public function show(Invoice $invoice)
    {
        return view('components.invoice', ['invoice' => $invoice->load([
            'items',
            'patient:id,first_name,last_name'
        ])]);
    }

    public function store(Request $request)
    {
        //TODO test to see it works!
        $patient = Patient::query()->firstWhere('id', $request->patient_id);

        $invoice = $patient->invoices()->create([]);
        $invoice->items()->attach($request->services);

        return response()->json([
            'data' => $invoice,
            'message' => 'success'
        ]);
    }

    public function update(Request $request, Invoice $invoice)
    {
        //TODO test update invoice
        return ['invoice' =>  $invoice, 'request' => $request->status];
    }
}
