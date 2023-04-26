<?php

namespace App\Models;

use App\Models\Invoice;
use App\Models\Consultation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    const UPDATED_AT = null;

    protected $fillable = ['name', 'category', 'price'];
    protected $casts = [
        'price' => 'float'
    ];

    public function consultations()
    {
        return $this->belongsToMany(Consultation::class, 'examinations');
    }

    public function invoices()
    {
        return $this->morphToMany(Invoice::class, 'invoiceable');
    }
}
