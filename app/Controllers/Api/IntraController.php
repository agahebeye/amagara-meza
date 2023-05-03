<?php

namespace App\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Intra;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\ApiResource;

#[Prefix('api/v1')]
#[ApiResource(
    resource: 'intras',
    names: 'api.v1.intras'
)]
class IntraController
{
    public function index()
    {
        return Intra::select('id', 'name')->where('qty', '>', 0)->get();
    }
}
