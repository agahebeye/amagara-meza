<?php

namespace App\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\ApiResource;

#[Prefix('api/v1')]
#[ApiResource(
    resource: 'examinatations',
    names: 'api.v1.examinations'
)]
class ExaminationController
{
    public function index(Request $request)
    {
        $examinations = DB::table('examinations')
            ->join('consultations', function ($join) use ($request) {
                $join->on('examinations.consultation_id', '=', 'consultations.id')
                    ->where('consultations.id', '=', $request->consultation_id);
            })
            ->join('services', 'examinations.service_id', '=', 'services.id')
            ->select('services.id', 'examinations.result', 'services.name');

        return datatables($examinations)->toJson();
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
