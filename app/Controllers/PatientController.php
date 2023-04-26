<?php

namespace App\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\ApiResource;

#[Prefix('api/v1')]
#[ApiResource(
    resource: 'patients',
    names: 'api.v1.patients'
)]
class PatientController
{
    public function index()
    {
        $patients = Patient::select('id', 'first_name', 'last_name');

        return datatables($patients)->toJson();
    }

    public function show(Patient $patient)
    {
        return view('components.patient.show', [
            'patient' => $patient
        ]);
    }

    public function store(Request $request)
    {

        $newPatient = Patient::create($request->all());

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
