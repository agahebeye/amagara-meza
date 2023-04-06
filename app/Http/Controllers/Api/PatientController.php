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
        $patients = Patient::query()->latest('id')->select('id', 'first_name', 'last_name');

        return datatables($patients)
            ->addColumn('view', function ($row) {
                $btn = '<a href="javascript:void(0)" class="view-button"><i class="icon-eye"></i></a>';
                return $btn;
            })
            ->rawColumns(['view'])
            ->toJson();
    }

    function store()
    {
        return request()->all();
        Patient::create(request()->all());

        return response()->json([
            'data' => 'success'
        ]);
    }
}
