<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use App\Modules\Invoice\Invoice;
use App\Modules\Patient\Patient;
use Barryvdh\Debugbar\Facades\Debugbar;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\ApiResource;

#[Prefix('api/v1')]
#[ApiResource(
    resource: 'invoices',
    shallow: true,
    names: 'api.v1.invoices',
    except: ['__invoke']
)]
class InvoiceController
{
    public function index()
    {
        $patients = Patient::select('id', 'first_name', 'last_name')
            ->with('latestInvoice.items')
            ->whereHas('latestInvoice', fn ($query) => $query->pending());

        return datatables($patients)->toJson();
    }

    public function show(Invoice $invoice)
    {
        return view('invoice::show', ['invoice' => $invoice->load([
            'items',
            'patient:id,first_name,last_name'
        ])]);
    }

    public function store(Request $request)
    {
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
        $invoice = tap($invoice)->update(['status' => $request->status]);

        return response()->json([
            'data' => $invoice,
            'message' => 'success'
        ], 200);
    }
}
