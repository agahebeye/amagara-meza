<?php

namespace App\Http\Controllers;

use Spatie\RouteAttributes\Attributes\Get;


class IndexCashBoxController
{
    #[Get('/hospital/cashbox', name: 'cashbox')]
    function __invoke()
    {
        return view('pages.cashbox');
    }
}
