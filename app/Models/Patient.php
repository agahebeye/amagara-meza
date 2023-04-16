<?php

namespace App\Models;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

class Patient extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'gender' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::created(function ($model) {
            $service = Service::query()->first();
            $invoice = $model->invoices()->create([]);
            $invoice->items()->attach($service->id);
        });
    }

    public function getGenderAttribute($value)
    {
        return $value ? 'F' : 'M';
    }

    public function getAgeAttribute($value)
    {
        $birth_date = Carbon::parse($value);
        return now()->diffInYears($birth_date);
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
        return $this->hasMany(Complaint::class)->latest();
    }

    public function latestComplaint()
    {
        return $this->hasOne(Complaint::class)->latestOfMany();
    }
}
