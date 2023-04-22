<?php

namespace App\Models;

use App\Modules\Patient\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Complaint extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'weight' => 'float',
        'size' => 'float',
        'blood_pressure' => 'float',
        'temperature' => 'float',
        'pulse_rate' => 'float',
        'respiratory_rate' => 'float',
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
