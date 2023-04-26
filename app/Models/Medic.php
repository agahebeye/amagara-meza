<?php

namespace App\Modules\Medic;

use App\Modules\Consultation\Consultation;
use App\Modules\Invoice\InvoiceItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medic extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function prescriptions()
    {
        return $this->belongsToMany(Consultation::class, 'prescriptions');
    }

    public function invoices()
    {
        return $this->morphMany(InvoiceItem::class, 'billable');
    }
}
