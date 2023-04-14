<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function scopePending($query)
    {
        return $query->where('status', 0);
    }

    public function scopePaid($query)
    {
        return $query->where('status', 1);
    }

    public function scopeCancelled($query)
    {
        return $query->where('status', 2);
    }

    public function items()
    {
        return $this->belongsToMany(Service::class, 'invoice_items');
    }
}
