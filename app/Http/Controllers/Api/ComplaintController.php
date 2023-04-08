<?php

namespace App\Http\Controllers\Api;


use App\Models\Complaint;
use Spatie\RouteAttributes\Attributes\ApiResource;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('v1')]
#[ApiResource(
    resource: 'complaints',
    names: 'api.v1.complaints'
)]
class ComplaintController
{
    function store()
    {
        return request()->all();
        Complaint::create(request()->all());

        return response()->json([
            'data' => 'success'
        ]);
    }
}
