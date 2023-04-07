<?php

namespace App\Http\Controllers\Api;

use App\Models\Patient;
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
        $patients = Patient::query()->latest('id')->get();

        return datatables($patients)
            ->addColumn('view', function ($row) {
                return '<a  data-toggle="modal" data-target="#show-patient-modal" class="view-button"><i class="icon-eye"></i></a>';
            })
            ->rawColumns(['view'])
            ->toJson();
    }

    function store()
    {

        $newPatient = tap(Patient::create(request()->all()));

        return response()->json([
            'data' => $newPatient,
            'message' => 'success'
        ], 201);
    }
}
