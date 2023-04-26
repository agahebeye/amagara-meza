<?php

namespace App\Controllers;

use Spatie\RouteAttributes\Attributes\Get;

class IndexPatientController
{

    #[Get('/hospital/patients', name: 'patients')]
    public function __invoke()
    {
        return view('components.patient.index');
    }
}
