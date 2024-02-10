<?php

namespace shoonyank;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class CustomBladeDirectives extends ServiceProvider{

    public function register()
    {
        // Register any bindings or configurations here
    }

    public function boot()
    {
        // Register your Blade directives
        if ($this->app->runningInConsole()) {
            $this->commands([
                // Optionally, you can register custom artisan commands here
            ]);
        }

        $this->registerBladeDirectives();
    }

    private function registerBladeDirectives()
    {
        // Register your Blade directives here
        Blade::directive('hello', function ($string) {
            return 'yo';
        });
    }

}