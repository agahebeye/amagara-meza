<?php

namespace App\Http\Controllers\Api;

use App\Models\Patient;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Prefix;

class MedicalFormController
{
    #[Get('/medical-form/{patient}', name: 'api.v1.medical-form')]
    public function __invoke(Patient $patient)
    {
        return view('components.medical-form', ['patient' => $patient, 'complaint' => $patient->latestComplaint]);
    }
}
