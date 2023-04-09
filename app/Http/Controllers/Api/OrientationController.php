<?php

namespace App\Http\Controllers\Api;


use App\Models\Patient;
use App\Models\Orientation;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Database\Eloquent\Builder;
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
        $patients = Patient::whereHas(
            'invoices',
            fn (Builder $query) =>
            $query->where('status', 1)
                ->whereHasMorph('priceable', Orientation::class)
        );

        Debugbar::info(Patient::with('invoices')->get()->toArray());

        return datatables($patients)->toJson();
    }

    function store()
    {
        return request()->all();
        Orientation::create(request()->all());

        return response()->json([
            'data' => 'success'
        ]);
    }
}
