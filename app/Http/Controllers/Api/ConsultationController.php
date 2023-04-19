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

    public function show(Patient $patient)
    {
    }

    public function store(Request $request)
    {
        // get orientation
        $orientation = Orientation::query()->firstWhere('complaint_id', $request->complaint_id);
        $consultation = $orientation->consultation()->firstOrCreate($request->except(['complaint_id', 'examinations']));
        return $consultation;
        // create consultation from it
        // link with examns

        return response()->json([
            'data' => $orientation,
            'message' => 'success'
        ], 201);
    }

    public function destroy(Consultation $consultation)
    {
        return tap($consultation)->delete();
    }
}
