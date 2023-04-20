<?php

namespace App\Http\Controllers\Api;

use App\Models\Consultation;
use App\Models\Orientation;
use App\Models\Patient;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Database\Query\Builder;
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
        $patients = Patient::has('latestComplaint')->with('latestComplaint');

        return datatables($patients)->toJson();
    }

    public function show(Patient $patient)
    {
    }

    public function store(Request $request)
    {
        // get orientation - Ok
        // create consultation from it - Ok
        // link with examns
        // generate invoice
        $orientation = Orientation::query()->firstWhere('complaint_id', $request->complaint_id);
        $consultation = $orientation->consultation()->firstOrCreate($request->except(['complaint_id', 'examinations']));
        $consultation->examinations()->attach($request->examinations);

        return $request->examinations;

        if ($consultation->wasRecentlyCreated) {
            return $request->examinations;
        }
        return $consultation;

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
