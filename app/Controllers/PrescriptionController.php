<?php

namespace App\Controllers;

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


        // $consultation = Consultation::find($request->consultation_id);
        // $prescription = $consultation->prescriptions()->sync($request->medics);
        // $invoice = Invoice::create(['patient_id' => $request->patient_id]);

        // we iterate to remove posology as we don't
        // need it in invoice,
        $medics = [];

        foreach ($request->medics as $k => $v) {
            $medics[$k] = ['qty' => $v['qty']];
        }

        // $invoice->medics()->sync($medics);

        $res = [];
        // after generating invoice, we then
        // need to substract qty from stock
        foreach ($medics as $k => $v) {
            $medic = Medic::query()->find($k)?->decrement('qty', $v['qty']);
            array_push($res, $medic);
        }

        return $res;
    }
}
