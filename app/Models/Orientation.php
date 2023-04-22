<?php

namespace App\Models;

use App\Models\Complaint;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Consultation\Consultation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orientation extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'orientation_date' => 'immutable_datetime',
    ];

    public function scopeWaitingList($query, $endDate, $department)
    {
        $startDate = Carbon::now()->startOfDay();

        return $query->whereDepartment($department)->whereBetween('created_at', [$startDate, $endDate])->count();
    }

    public function complaint(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Complaint::class);
    }

    public function consultation()
    {
        return $this->hasOne(Consultation::class);
    }
}
