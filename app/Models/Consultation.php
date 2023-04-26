<?php

namespace App\Models;

use App\Models\Medic;
use App\Models\Service;
use App\Models\Orientation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'chief_complaint',
        'disease_history',
        'medical_history',
        'anamnesis',
        'physical_examination',
        'probable_diagnosis',
    ];

    public function orientation()
    {
        return $this->belongsTo(Orientation::class);
    }

    public function examinations()
    {
        return $this->belongsToMany(Service::class, 'examinations');
    }

    public function prescriptions()
    {
        return $this->belongsToMany(Medic::class, 'prescriptions');
    }
}