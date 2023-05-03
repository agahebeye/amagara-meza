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
        $consultationId = Consultation::whereId($id)->value('id');

        return view('components.laboratory.show', [
            'consultationId' => $consultationId
        ]);
    }

    public function store(Request $request)
    {
        // to be implemented
    }

    public function update($id, Request $request)
    {
        $consultation = Consultation::query()->find($id, ['id']);
        $exam = $consultation->examinations()->updateExistingPivot(
            $request->service_id,
            $request->except(['service_id'])
        );

        return response()->json([
            'data' => $exam,
            'message' => 'Result succefully added.'
        ]);
    }
}
