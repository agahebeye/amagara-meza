<?php

namespace App\Models;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Consultation\Consultation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    const UPDATED_AT = null;

    protected $fillable = ['name', 'category', 'price'];

    public function invoices()
    {
        return $this->belongsToMany(Invoice::class, 'invoice_items');
    }

    public function consultations()
    {
        return $this->belongsToMany(Consultation::class, 'examinations');
    }
}
