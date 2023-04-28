<?php

namespace App\Controllers\Web;

use App\Models\Patient;
use Barryvdh\Debugbar\Facades\Debugbar;
use Spatie\RouteAttributes\Attributes\Get;

class IndexDoctorController
{

    #[Get('/hospital/doctors', name: 'doctors.index')]
    public function __invoke()
    {
        return view('components.doctor.index');
    }
}
