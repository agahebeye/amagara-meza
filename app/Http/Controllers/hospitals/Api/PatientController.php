<?php

namespace App\Http\Controllers\hospitals\Api;

use App\Models\hospitals\Patient;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\ApiResource;

#[Prefix('api/v1')]
#[ApiResource(
    resource: 'patients',
    names: 'api.v1.patients'
)]
class PatientController
{
    function index()
    {
        $patients = Patient::select('id', 'first_name', 'last_name');

        return datatables($patients)
            ->toJson();
    }
}
