<?php

namespace App\Modules\Orientation\views;

use Spatie\RouteAttributes\Attributes\Get;

class IndexOrientationController
{
    #[Get('/hospital/orientations', name: 'orientations')]
    public function __invoke()
    {
        return view('orientation::index');
    }
}
