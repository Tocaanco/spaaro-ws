<?php
namespace Spaaro;
use Illuminate\Support\ServiceProvider;
class SpaaroWsServiceProvider extends ServiceProvider {

    public function boot() {
        $this->publishes([
            __DIR__.'/../config/spaaro.php' => config_path('spaaro.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/spaaro.php', 'spaaro'
        );
    }
}