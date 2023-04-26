<?php

namespace App\Controllers;

use Spatie\RouteAttributes\Attributes\Get;

class IndexOrientationController
{
    #[Get('/hospital/orientations', name: 'orientations')]
    public function __invoke()
    {
        return view('orientation::index');
    }
}
