<?php

namespace Database\Seeders;

use App\Models\Complaint;
use App\Models\Patient;
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
        // Patient::factory()->count(2)->create();
        $complaint = Complaint::query()->first();
        $complaint->orientation()->create([
            'orientation_date' => Carbon::now()->subDays(2),
            'department' => 'Neurology',
            'precision' => 'monitoring',
            'created_at' => Carbon::now()->subDays(2),
        ]);

        // dd($complaint->toArray());
        // \App\Models\User::factory(10)->create();
    }
}
