<?php

namespace Database\Seeders;

use App\Models\Complaint;
use App\Models\Intra;
use App\Models\Medic;
use App\Models\Patient;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Service::factory()->create(['category' => 'Consultation']);
        Service::factory()->count(7)->create();
        Medic::factory()->count(20)->create();
        Intra::factory()->count(5)->create();
    }
}
