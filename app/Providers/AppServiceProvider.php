<?php

namespace App\Providers;

use App\Models\Orientation;
use Illuminate\Support\ServiceProvider;
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
        Relation::enforceMorphMap([
            'orientation' => Orientation::class
        ]);

        $this->loadViewsFrom(app_path('Modules/Consultation/views'), 'consultation');
        $this->loadViewsFrom(app_path('Modules/Patient/views'), 'patient');
        $this->loadViewsFrom(app_path('Modules/Complaint/views'), 'complaint');
        $this->loadViewsFrom(app_path('Modules/Orientation/views'), 'orientation');
        $this->loadViewsFrom(app_path('Modules/Invoice/views'), 'invoice');
        $this->loadViewsFrom(app_path('Modules/Service/views'), 'invoice');
    }
}
