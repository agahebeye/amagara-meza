<?php

namespace App\Modules\Service;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Consultation\Consultation;
use App\Modules\Invoice\InvoiceItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    const UPDATED_AT = null;

    protected $fillable = ['name', 'category', 'price'];

    public function invoices()
    {
        return $this->morphMany(InvoiceItem::class, 'billable');
    }

    public function consultations()
    {
        return $this->belongsToMany(Consultation::class, 'examinations');
    }
}
