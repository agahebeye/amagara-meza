<?php

namespace App\Models;

use App\Models\hospitals\Patient;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orientation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function patients(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Patient::class, 'patient_orientation');
    }
}
