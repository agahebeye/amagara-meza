<?php

namespace App\Http\Controllers\Api;

use App\Models\Patient;
use Spatie\RouteAttributes\Attributes\ApiResource;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('v1')]
#[ApiResource(
    resource: 'patients',
    names: 'api.v1.patients'
)]
class PatientController
{
    public function index()
    {
        $patients = Patient::query();

        return datatables($patients)->toJson();
    }

    public function store()
    {

        $newPatient = Patient::create(request()->all());

        return response()->json([
            'data' => $newPatient,
            'message' => 'success'
        ], 201);
    }

    public function destroy(Patient $patient)
    {
        return tap($patient)->delete();
    }
}
