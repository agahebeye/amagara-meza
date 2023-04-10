<?php

namespace App\Http\Controllers;

use App\Models\Patient;
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
            ->whereHas('invoices', fn ($query) => $query->pending());


        return datatables($patients)->toJson();
    }
}
