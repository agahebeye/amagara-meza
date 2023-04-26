<?php

namespace App\Controllers;

use App\Models\Invoice;
use App\Models\Patient;
use Illuminate\Http\Request;
use Barryvdh\Debugbar\Facades\Debugbar;
use DebugBar\DebugBar as DebugBarDebugBar;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\ApiResource;

#[Prefix('api/v1')]
#[ApiResource(
    resource: 'invoices',
    shallow: true,
    names: 'api.v1.invoices',
)]
class InvoiceController
{
    public function index()
    {
        $patients = Patient::select('id', 'first_name', 'last_name')
            ->with(['latestInvoice'])
            ->whereHas('latestInvoice', fn ($query) => $query->pending());

        return datatables($patients)->toJson();
    }

    public function show(Invoice $invoice)
    {
        $invoice = $invoice->load([
            'services:id,name,price',
            'medics',
            'patient:id,first_name,last_name'
        ]);

        Debugbar::debug($invoice->services->toArray());

        $st = $invoice->services->sum('price');
        $mt = $invoice->medics->sum(function ($medic) {
            return $medic['unit_price'] * $medic['pivot']['qty'];
        });

        return view('components.invoice.show', [
            'invoice' => $invoice,
            'total' => $st + $mt
        ]);
    }

    public function store(Request $request)
    {
        $patient = Patient::select('id')->find($request->patient_id);

        $invoice = $patient->invoices()->create([]);
        $invoice->services()->attach($request->services);

        return response()->json([
            'data' => $invoice,
            'message' => 'success'
        ]);
    }

    public function update(Request $request, Invoice $invoice)
    {
        $invoice = tap($invoice)->update(['status' => $request->status, 'paidAt' => now()]);

        return response()->json([
            'data' => $invoice,
            'message' => 'success'
        ], 200);
    }
}
