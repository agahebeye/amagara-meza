<?php

namespace App\Controllers\Web;

use Spatie\RouteAttributes\Attributes\Get;

class IndexConsultationController
{

    #[Get('/hospital/consultations', name: 'consultations.index')]
    public function __invoke()
    {
        return view('components.consultation.index');
    }
}
