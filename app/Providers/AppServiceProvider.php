<?php

namespace App\Providers;
use App\Traits\RankingTrait;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
        use RankingTrait;
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
        view()->composer('*', function ($view) {
        $data = $this->getPlayerData(); // Assume this function gets the data you need

        $view->with('gdata', $data);
    });
    }
}
