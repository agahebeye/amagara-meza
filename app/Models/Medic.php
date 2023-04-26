<?php

namespace App\Models;

use App\Models\InvoiceItem;
use App\Models\Consultation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
