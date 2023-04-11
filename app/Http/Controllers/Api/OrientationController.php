<?php

namespace App\Http\Controllers\Api;

use App\Models\Complaint;
use App\Models\Patient;
use App\Models\Orientation;
use Barryvdh\Debugbar\Facades\Debugbar;
use DebugBar\DebugBar as DebugBarDebugBar;
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

        $complaint = Complaint::create($request->complaint);
        $complaint->orientation()->create($request->orientation);

        $data = $complaint->loadCount([
            'orientation' =>
            fn ($query) => $query->waitingList(
                endDate: Carbon::now(),
                department: $request->orientation['department']
            )
        ]);

        return $data;

        return response()->json([
            'data' => 'success'
        ]);
    }
}
