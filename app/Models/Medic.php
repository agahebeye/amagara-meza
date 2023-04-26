<?php

namespace App\Models;

use App\Models\Invoice;
use App\Models\Consultation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medic extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'unit_price' => 'float'
    ];

    public function prescriptions()
    {
        return $this->belongsToMany(Consultation::class, 'prescriptions');
    }

    public function invoices()
    {
        return $this->morphToMany(Invoice::class, 'invoiceable');
    }
}
