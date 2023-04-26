<?php

namespace App\Providers;

use App\Models\Orientation;
use App\Modules\Service\Service;
use Illuminate\Support\Str;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        collect([
            'Consultation', 'Patient', 'Complaint', 'Orientation', 'Invoice', 'Service'
        ])->each(
            fn ($namespace) =>
            $this->loadViewsFrom(app_path("Modules/{$namespace}/views"), Str::lower($namespace))
        );

        Relation::enforceMorphMap([
            'Service' => Service::class
        ]);
    }
}
