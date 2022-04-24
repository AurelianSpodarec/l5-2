<?php

namespace App\Providers;

use App\View\Directives\Resource;
use Roots\Acorn\ServiceProvider;

class ResourceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('assets.resource.manifest', function ($app) {
            return $app['assets']->manifest('resource');
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->bound('view')) {
            $this->app->make('view')
                ->getEngineResolver()->resolve('blade')->getCompiler()
                ->directive('resource', new Resource());
        }
    }

}