<?php

namespace App\Http\Controllers\Api;


use App\Models\Patient;
use App\Models\Orientation;
use Barryvdh\Debugbar\Facades\Debugbar;
use DebugBar\DebugBar as DebugBarDebugBar;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\ApiResource;

#[Prefix('v1')]
#[ApiResource(
    resource: 'orientations',
    names: 'api.v1.orientations'
)]
class OrientationController
{
    public function index()
    {
        $patients = Patient::with('latestInvoice')->whereHas(
            'latestInvoice',
            fn (Builder $query) =>
            $query->paid()->whereService('consultation')
        );

        // DebugBar::info($patients->get()->toJson());

        return datatables($patients)->toJson();
    }

    function store(Request $request)
    {
        return $request;

        return response()->json([
            'data' => 'success'
        ]);
    }
}
