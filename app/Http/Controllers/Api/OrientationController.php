<?php

namespace App\Http\Controllers\Api;

use App\Models\Complaint;
use App\Models\Orientation;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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
        // create complaint
        // create orientation with new complaint
        // show waiting list
        // generate medical orientation

        // $complaint = Complaint::create($request->complaint);
        // $complaint->orientation()->create($request->orientation);

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
