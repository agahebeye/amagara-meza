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
        $patients = Patient::all();
        return datatables($patients)->make(true);
    }
}
