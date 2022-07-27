<?php 

namespace Currency;

use Illuminate\Support\ServiceProvider;

class CurrencyServiceProvider extends ServiceProvider
{
    public function boot() {

        $this->publishes([
            __DIR__.'/../config/currency.php' => config_path('currency.php')
        ], 'currency-config');

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'currency-migrations');

        $this->publishes([
            __DIR__.'/../database/seeds/' => database_path('seeds')
        ], 'currency-seeds');
    }
}