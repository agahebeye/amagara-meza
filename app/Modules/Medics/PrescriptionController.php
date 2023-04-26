<?php

namespace App\Modules\Medics;

use App\Modules\Consultation\Consultation;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\Post;

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
