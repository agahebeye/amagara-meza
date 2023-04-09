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

        return datatables(Patient::query())->toJson();
    }
}
