<?php

namespace App\Http\Controllers\Api;

use App\Models\Patient;
use Illuminate\Http\Request;
use Spatie\RouteAttributes\Attributes\ApiResource;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('api/v1')]
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

    public function show(Patient $patient)
    {
        return view('components.partials.modals.show-patient', [
            'patient' => $patient
        ]);
    }

    public function store(Request $request)
    {

        $newPatient = Patient::create($request);

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
