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
        $invoices = Invoice::pending()->select('id', 'service', 'patient_id')
            ->with('patient:id,first_name,last_name');

        return datatables($invoices)->toJson();
    }

    public function destroy(Request $request, Invoice $invoice)
    {
        return tap($invoice)->update($request->all());
    }
}
