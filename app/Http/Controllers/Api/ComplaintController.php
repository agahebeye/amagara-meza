<?php

namespace App\Http\Controllers\Api;


use App\Models\Complaint;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\ApiResource;

#[Prefix('api/v1')]
#[ApiResource(
    resource: 'complaints',
    names: 'api.v1.complaints'
)]
class ComplaintController
{
    function store()
    {
        Complaint::create(request()->all());

        return response()->json([
            'data' => 'success'
        ]);
    }
}