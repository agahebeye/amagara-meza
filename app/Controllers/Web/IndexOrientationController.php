<?php

namespace App\Controllers\Web;

use Spatie\RouteAttributes\Attributes\Get;

class IndexOrientationController
{
    #[Get('/hospital/orientations', name: 'orientations.index')]
    public function __invoke()
    {
        return view('components.orientation.index');
    }
}
