<?php 

namespace Currency;

class CurrencyServiceProvider extends ServiceProvider
{
    public function boot() {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}