<?php

namespace App\Http\Controllers\Api;


use App\Models\Orientation;
use Spatie\RouteAttributes\Attributes\ApiResource;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('v1')]
#[ApiResource(
    resource: 'orientations',
    names: 'api.v1.orientations'
)]
class OrientationController
{
    function store()
    {
        return request()->all();
        Orientation::create(request()->all());

        return response()->json([
            'data' => 'success'
        ]);
    }
}
