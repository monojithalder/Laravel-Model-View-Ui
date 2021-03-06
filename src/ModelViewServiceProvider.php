<?php

namespace Novatree\ModelViewUi;

use Illuminate\Support\ServiceProvider;
use App;

class ModelViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/migrations' => base_path('database/migrations'),
        ]);
        $this->loadViewsFrom(__DIR__.'/views/pages', 'ui');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Novatree\ModelViewUi\controller\UiController');
    }
}
