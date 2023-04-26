<?php

namespace App\Models;

use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Consultation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    const UPDATED_AT = null;

    protected $fillable = ['name', 'category', 'price'];

    public function consultations()
    {
        return $this->belongsToMany(Consultation::class, 'examinations');
    }
}
