<?php

namespace App\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Barryvdh\Debugbar\Facades\Debugbar;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Prefix;

class MedicalFormController
{
    #[Get('/medical-form/{patient}', name: 'api.v1.medical-form')]
    public function __invoke(Patient $patient)
    {
        return view('components.patient.medical-form', ['patient' => $patient, 'complaint' => $patient->latestComplaint]);
    }
}
