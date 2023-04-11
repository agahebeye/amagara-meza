<?php

namespace App\Models;

use App\Models\Complaint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

class Orientation extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'orientation_date' => 'immutable_datetime',
    ];

    public function complaint(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Complaint::class);
    }

    public function scopeWaitingList($query, $endDate, $department)
    {
        $startDate = Carbon::now()->startOfDay();

        return $query->whereDepartment($department)->whereBetween('created_at', [$startDate, $endDate])->count()/* ->whereBetween('created_at', [$startDate, $endDate]) */;
    }
}
