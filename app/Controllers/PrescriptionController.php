<?php

namespace App\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use Barryvdh\Debugbar\Facades\Debugbar;
use Spatie\RouteAttributes\Attributes\Post;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('api/v1')]
class PrescriptionController
{
    #[Post('prescriptions/store', name: 'api.v1.prescriptions.store')]
    public function store(Request $request)
    {
        $consultation = Consultation::query()->firstWhere('id', $request->consultation_id);
        // $consultation->prescriptions()->attach($request->medics);
        Debugbar::debug($request->all());
        return $request->all();
    }
}
