<?php

namespace App\Controllers\Api;

use App\Models\Patient;
use App\Models\Complaint;
use App\Models\Orientation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Database\Eloquent\Builder;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\ApiResource;

#[Prefix('api/v1')]
#[ApiResource(
    resource: 'orientations',
    names: 'api.v1.orientations'
)]
class OrientationController
{
    public function index()
    {
        $patients = Patient::doesntHave('latestComplaint')->whereHas(
            'latestInvoice',
            fn (Builder $query) => $query->paid()
        );

        return datatables($patients)->toJson();
    }

    function store(Request $request)
    {
        // create complaint - OK
        // create orientation with new complaint - OK
        // show waiting list - OK
        // generate medical orientation - oK (automatic)

        $complaint = Complaint::create($request->complaint);
        $complaint->orientation()->create($request->orientation);

        $data = Orientation::waitingList(
            endDate: Carbon::now(),
            department: $request->orientation['department']
        );


        return response()->json([
            'data' => $data,
            'message' => 'success'
        ], 201);
    }
}
