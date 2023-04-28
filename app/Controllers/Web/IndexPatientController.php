<?php

namespace App\Controllers\Web;

use Spatie\RouteAttributes\Attributes\Get;

class IndexPatientController
{

    #[Get('/hospital/patients', name: 'patients.index')]
    public function __invoke()
    {
        return view('components.patient.index');
    }
}
