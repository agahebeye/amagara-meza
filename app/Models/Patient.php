<?php

namespace App\Models;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;

    protected $guarded = [];
    protected $hidden = ['updated_at', 'created_at'];
    protected $appends = ['full_name'];
    protected $casts = [
        'gender' => 'boolean',
    ];

    public function getFullNameAttribute()
    {
        return "{$this->last_name} {$this->first_name} ";
    }

    public function getGenderAttribute($value)
    {
        return $value ? 'F' : 'M';
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function indebted()
    {
        return $this->invoices()->pending();
    }
}
