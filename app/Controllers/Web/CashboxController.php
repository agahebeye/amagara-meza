<?php

namespace App\Controllers\Web;

use Spatie\RouteAttributes\Attributes\Get;

class CashboxController
{
    #[Get('/hospital/cashbox', name: 'cashbox')]
    public function __invoke()
    {
        return view('components.invoice.cashbox');
    }
}
