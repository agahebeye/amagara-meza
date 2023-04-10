<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function patient(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function orientation(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Orientation::class);
    }
}
