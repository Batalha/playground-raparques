<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\ClienteRepository::class,
            \App\Repositories\ClienteRepositoryEloquent::class
        );

        $this->app->bind(
            \App\Repositories\HomeRepository::class,
            \App\Repositories\HomeRepositoryEloquent::class
        );

        $this->app->bind(
            \App\Repositories\OrcamentoRepository::class,
            \App\Repositories\OrcamentoRepositoryEloquent::class
        );

        $this->app->bind(
            \App\Repositories\GaleriaRepository::class,
            \App\Repositories\GaleriaRepositoryEloquent::class
        );
    }
}
