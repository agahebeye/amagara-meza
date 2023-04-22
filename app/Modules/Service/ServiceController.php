<?php

namespace App\Modules\Service;

use App\Modules\Service\Service;
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
