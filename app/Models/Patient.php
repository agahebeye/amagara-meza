<?php

namespace App\Models;

use App\Models\Invoice;
use App\Models\Service;
use App\Models\Complaint;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
            // upon regestering a new patient, he will
            // need to pay for her medical form

            $service = Service::query()->first();
            $invoice = $model->invoices()->create();
            $service->invoices()->save($invoice);
        });
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
        return $this->hasMany(Complaint::class)->latest();
    }

    public function latestComplaint()
    {
        return $this->hasOne(Complaint::class)->latestOfMany();
    }
}
