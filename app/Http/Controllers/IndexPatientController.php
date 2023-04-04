<?php

namespace App\Http\Controllers;

use Spatie\RouteAttributes\Attributes\Get;


class IndexPatientController
{
    #[Get('/hospital/patients', name: 'patients')]
    function __invoke()
    {
        return view('pages.patients');
    }
}
