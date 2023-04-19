<?php

namespace App\Models;

use App\Models\Invoice;
use App\Models\Consultation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function invoices()
    {
        return $this->belongsToMany(Invoice::class, 'invoice_items');
    }

    public function consultations()
    {
        return $this->belongsToMany(Consultation::class, 'examinations');
    }
}
