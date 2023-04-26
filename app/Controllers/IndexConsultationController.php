<?php

namespace App\Controllers;

use Spatie\RouteAttributes\Attributes\Get;

class IndexConsultationController
{

    #[Get('/hospital/consultations', name: 'consultations')]
    public function __invoke()
    {
        return view('components.consultation.index');
    }
}
