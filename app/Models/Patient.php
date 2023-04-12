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

    protected static function booted(): void
    {
        static::created(function ($model) {
            $model->invoices()->create([
                'service' => 'consultation'
            ]);
        });
    }

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

    public function latestInvoice()
    {
        return $this->hasOne(Invoice::class)->latestOfMany();
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }

    public function latestComplaint()
    {
        return $this->hasOne(Complaint::class)->latestOfMany();
    }
}
