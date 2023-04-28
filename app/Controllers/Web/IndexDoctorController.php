<?php

namespace App\Controllers\Web;

use Spatie\RouteAttributes\Attributes\Get;

class IndexDoctorController
{

    #[Get('/hospital/doctors', name: 'doctors.index')]
    public function __invoke()
    {
        return view('components.doctor.index');
    }
}
