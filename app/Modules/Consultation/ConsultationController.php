<?php

namespace App\Modules\Consultation;

use Illuminate\Http\Request;
use App\Modules\Invoice\Invoice;
use App\Modules\Patient\Patient;
use App\Modules\Complaint\Complaint;
use Barryvdh\Debugbar\Facades\Debugbar;
use App\Modules\Orientation\Orientation;
use App\Modules\Consultation\Consultation;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Prefix;
use Spatie\RouteAttributes\Attributes\ApiResource;

#[Prefix('api/v1')]
#[ApiResource(
    resource: 'consultations',
    names: 'api.v1.consultations',
    except: ['__invoke']
)]
class ConsultationController
{
    public function index()
    {
        $patients = Patient::select('id', 'first_name', 'last_name')
            ->has('latestComplaint')
            ->with(['latestComplaint']);

        return datatables($patients)->toJson();
    }

    // id -> complaint_id
    public function show($id)
    {
        $complaint = Complaint::select('id', 'complaint', 'date', 'patient_id')
            ->with(['orientation.consultation'])->firstWhere('id', $id);

        return view('consultation::show', [
            'complaint' => $complaint,
            'consultation' => $complaint->orientation?->consultation,
        ]);
    }

    public function store(Request $request)
    {
        // get orientation - Ok
        // find or create consultation from it - Ok
        // link with examns - ok
        // generate invoice - ok
        $orientation = Orientation::query()->firstWhere('complaint_id', $request->complaint_id);
        $consultation = $orientation->consultation()->firstOrCreate($request->except(['complaint_id', 'patient_id', 'examinations']));

        // $consultation->examinations()->attach($request->examinations);
        // $invoice = Invoice::create(['patient_id' => $request->patient_id]);
        // $invoice->items()->attach($request->examinations);

        return response()->json([
            'data' => $consultation,
            'message' => 'success'
        ], 201);
    }

    public function destroy(Consultation $consultation)
    {
        return tap($consultation)->delete();
    }
}
