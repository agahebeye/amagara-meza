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
        // $invoices = Invoice::pending()->select('id', 'patient_id')
        //     ->with(['patient:id,first_name,last_name', 'items']);
        $patients = Patient::select('id', 'first_name', 'last_name')
            ->with('latestInvoice.items');

        return datatables($patients)->toJson();
    }

    public function show(Patient $patient)
    {
        return view('components.invoice');
    }

    public function store(Request $request)
    {
        $patient = Patient::query()->firstWhere('id', $request->patient_id);

        $invoice = $patient->invoices()->create([
            'service' => $request->service
        ]);

        return response()->json([
            'data' => $invoice,
            'message' => 'success'
        ]);
    }

    public function destroy(Request $request, Invoice $invoice)
    {
        return tap($invoice)->update($request->all());
    }
}
