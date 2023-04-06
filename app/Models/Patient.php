<?php

namespace App\Models\hospitals;

use App\Models\Complaint;
use App\Models\Orientation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;

    protected $guarded = [];

    public function complaints(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Complaint::class);
    }

    public function orientations(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Orientation::class, 'patient_orientation');
    }
}
