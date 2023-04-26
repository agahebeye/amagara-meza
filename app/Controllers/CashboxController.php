<?php

namespace App\Controllers;

use Spatie\RouteAttributes\Attributes\Get;

class CashboxController
{
    #[Get('/hospital/cashbox', name: 'cashbox')]
    public function __invoke()
    {
        return view('invoice::cashbox');
    }
}
