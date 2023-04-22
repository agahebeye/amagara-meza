<?php

namespace App\Modules\Consultation;

use App\Modules\Service\Service;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Orientation\Orientation;
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
}
