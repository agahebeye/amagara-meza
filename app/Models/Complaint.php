<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'weight' => 'decimal:5,2',
        'size' => 'decimal:5,2',
        'blood_pressure' => 'decimal:5,2',
        'temperature' => 'decimal:5,2',
        'pulse_rate' => 'decimal:5,2',
        'respiratory_rate' => 'decimal:5,2',
    ];

    public function patient(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function orientation(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Orientation::class);
    }
}
