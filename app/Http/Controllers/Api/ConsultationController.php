<?php

namespace App\Http\Controllers\Api;

use App\Models\Consultation;
use App\Models\Orientation;
use App\Models\Patient;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\ApiResource;

#[Prefix('api/v1')]
#[ApiResource(
    resource: 'consultations',
    names: 'api.v1.consultations'
)]
class ConsultationController
{
    public function index()
    {
        $consultations = Consultation::query();

        return datatables($consultations)->toJson();
    }

    public function store(Request $request)
    {
        $patient = Patient::select('id', 'first_name')->with('latestComplaint.orientation')
            ->firstWhere('id', $request->patient_id);

        return response()->json([
            'data' => $patient,
            'message' => 'success'
        ], 201);
    }

    public function destroy(Consultation $consultation)
    {
        return tap($consultation)->delete();
    }
}
