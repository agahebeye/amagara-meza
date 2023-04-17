<?php

namespace App\Http\Controllers\Api;

use App\Models\Service;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\ApiResource;

#[Prefix('api/v1')]
#[ApiResource(
    resource: 'services',
    names: 'api.v1.services'
)]
class ServiceController
{
    public function index()
    {
        return Service::all();
    }
}
