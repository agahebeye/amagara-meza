<?php

namespace App\Controllers;


use App\Modules\Complaint\Complaint;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\ApiResource;

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
