<?php

namespace App\Http\Controllers;

use Spatie\RouteAttributes\Attributes\Get;


class IndexConsultationController
{
    #[Get('/hospital/consultations', name: 'consultations')]
    function __invoke()
    {

        return view('pages.consultations');
    }
}
