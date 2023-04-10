<?php

namespace App\Models;

use App\Models\Complaint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orientation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function complaint(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Complaint::class);
    }
}
