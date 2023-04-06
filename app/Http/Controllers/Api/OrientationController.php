<?php

namespace App\Http\Controllers\Api;


use App\Models\Orientation;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\ApiResource;

#[Prefix('api/v1')]
#[ApiResource(
    resource: 'orientations',
    names: 'api.v1.orientations'
)]
class OrientationController
{
    function store()
    {
        Orientation::create(request()->all());

        return response()->json([
            'data' => 'success'
        ]);
    }
}