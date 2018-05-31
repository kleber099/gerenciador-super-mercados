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
        $this->app->bind('App\Contracts\Business\LojaServiceContract', 'App\Business\LojaService');
        $this->app->bind('App\Contracts\Repositories\LojaRepositoryContract', 'App\Repositories\LojaRepository');
        $this->app->bind('App\Contracts\Business\ProdutoServiceContract', 'App\Business\ProdutoService');
        $this->app->bind('App\Contracts\Repositories\ProdutoRepositoryContract', 'App\Repositories\ProdutoRepository');
        $this->app->bind('App\Contracts\Business\VinculadorLojaProdutoServiceContract', 'App\Business\VinculadorLojaProdutoService');

    }
}
