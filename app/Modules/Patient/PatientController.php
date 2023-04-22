<?php

namespace App\Modules\Patient;

use Illuminate\Http\Request;
use App\Modules\Patient\Patient;
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
        $patients = Patient::query();

        return datatables($patients)->toJson();
    }

    public function show(Patient $patient)
    {
        return view('patient::show', [
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
