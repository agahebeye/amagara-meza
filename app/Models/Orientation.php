<?php

namespace App\Models;

use App\Models\Invoice;
use App\Models\Complaint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orientation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }

    public function invoice()
    {
        return $this->morphOne(Invoice::class, 'priceable');
    }
}
