<?php

namespace App\Controllers\Web;

use Spatie\RouteAttributes\Attributes\Get;

class IndexLaboratoryController
{

    #[Get('/hospital/laboratories', name: 'laboratories.index')]
    public function __invoke()
    {
        return view('components.laboratory.index');
    }
}
