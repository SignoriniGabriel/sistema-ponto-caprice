<?php

namespace App\Providers;

use ConsoleTVs\Charts\Registrar as Charts;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application Services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application Services.
     *
     * @return void
     */
    public function boot(Charts $charts)
    {
        Schema::defaultStringLength(191);
        $charts->register([\App\Charts\GraficoVendas::class]);
    }
}
