<?php

namespace App\Http\Controllers\hospitals;

use App\Models\hospitals\Patient;
use Spatie\RouteAttributes\Attributes\Get;


class IndexPatientController
{
    #[Get('/hospital/patients', name: 'hospitals.patients')]
    function index()
    {
        return view('pages.hospitals.patients');
    }
}
