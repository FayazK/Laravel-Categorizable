<?php

namespace DraperStudio\Categorizable;

use DraperStudio\ServiceProvider\ServiceProvider as BaseProvider;
use Cviebrock\EloquentSluggable\SluggableServiceProvider;

class ServiceProvider extends BaseProvider
{
    protected $packageName = 'categorizable';

    public function boot()
    {
        $this->setup(__DIR__)
             ->publishMigrations();
    }

    public function register()
    {
        $this->app->register(SluggableServiceProvider::class);
    }
}
