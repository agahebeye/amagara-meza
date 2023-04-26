<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use App\Modules\Patient\Patient;
use Barryvdh\Debugbar\Facades\Debugbar;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Prefix;

class MedicalFormController
{
    #[Get('/medical-form/{patient}', name: 'api.v1.medical-form')]
    public function __invoke(Patient $patient)
    {
        return view('patient::medical-form', ['patient' => $patient, 'complaint' => $patient->latestComplaint]);
    }
}
