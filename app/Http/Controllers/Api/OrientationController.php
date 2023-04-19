<?php

namespace App\Http\Controllers\Api;

use App\Models\Patient;
use App\Models\Complaint;
use App\Models\Orientation;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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
        $patients = Patient::select('id', 'first_name', 'last_name')
            ->whereHas(
                'latestInvoice',
                fn (Builder $query) => $query->paid()
            )->with(['latestComplaint']);

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
            'data' => $data + 1,
            'message' => 'success'
        ], 201);
    }
}
