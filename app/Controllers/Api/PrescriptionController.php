<?php

namespace App\Controllers\Api;

use App\Models\Consultation;
use App\Models\Invoice;
use App\Models\Medic;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use Barryvdh\Debugbar\Facades\Debugbar;
use Spatie\RouteAttributes\Attributes\Post;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('api/v1')]
class PrescriptionController
{
    #[Post('prescriptions/store', name: 'api.v1.prescriptions.store')]
    public function store(Request $request)
    {

        $consultation = Consultation::find($request->consultation_id);
        $consultation->prescriptions()->sync($request->medics);

        // we iterate to remove posology as we don't
        // need it in invoice,
        $medics = [];

        foreach ($request->medics as $k => $v) {
            $medics[$k] = ['qty' => $v['qty']];
        }

        $invoice = Invoice::create(['patient_id' => $request->patient_id]);
        $invoice->medics()->sync($medics);

        // after generating invoice, we then
        // need to substract qty from stock
        foreach ($medics as $k => $v) {
            Medic::query()->find($k)?->decrement('qty', $v['qty']);
        }

        return response()->json([
            'data' => $consultation->load('prescriptions'),
            'message' => 'success'
        ], 201);
    }
}
