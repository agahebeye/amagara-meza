<?php

namespace App\Controllers\Api;

use App\Models\Consultation;
use App\Models\Patient;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\ApiResource;

#[Prefix('api/v1')]
#[ApiResource(
    resource: 'laboratories',
    names: 'api.v1.laboratories'
)]
class LaboratoryController
{
    public function index()
    {
        $patients = Patient::select('id', 'first_name', 'last_name')
            ->has('latestComplaint.consultation.examinations')
            ->with('latestComplaint.consultation');

        return datatables($patients)->toJson();
    }

    public function show($id)
    {
        $consultation = Consultation::with('examinations')->firstWhere('id', $id);

        return view('components.laboratory.show', [
            'consultation' => $consultation
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

    public function update($id, Request $request)
    {
        $consultation = Consultation::query()->firstWhere('id', $id);
        return $request->all();
    }
}
