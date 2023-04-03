<?php

namespace App\Http\Controllers\hospitals;

use App\Models\hospitals\Patient;
use Spatie\RouteAttributes\Attributes\Get;


class PatientController
{
    #[Get('/hospital/patients', name: 'hospitals.patients')]
    function index()
    {
        $patients = Patient::all();

        return view('pages.hospitals.patients', ['patients' => $patients]);
    }
}
