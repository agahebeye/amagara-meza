<?php

namespace App\Models;

use App\Models\Complaint;
use App\Models\Orientation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;

    protected $guarded = [];
    protected $hidden = ['updated_at', 'created_at'];
    protected $casts = [
        'gender' => 'boolean',
    ];

    public function getGenderAttribute($value)
    {
        return $value ? 'F' : 'M';
    }
}
