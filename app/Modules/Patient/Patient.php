<?php

namespace App\Modules\Patient;

use Illuminate\Support\Carbon;
use App\Modules\Invoice\Invoice;
use App\Modules\Service\Service;
use App\Modules\Complaint\Complaint;
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
            $invoice = $model->invoices()->create([]);
            // $service->invoices()->create(['invoice_id' => $invoice->id]);
            $invoice->items()->create([
                'billable_id' => $service->id,
                'billable_type' => get_class($service)
            ]);
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
