<?php

namespace App\Modules\Consultation;

use Spatie\RouteAttributes\Attributes\Get;

class IndexConsultationController
{

    #[Get('/hospital/consultations', name: 'consultations')]
    public function __invoke()
    {
        return view('consultation::index');
    }
}
