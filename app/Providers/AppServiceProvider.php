<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('title', function ($expression) {
            return '<?php $__env->startSection(\'title\', '.$expression.'); ?>';
        });

        Blade::directive('content', function () {
            return '<?php $__env->startSection(\'content\'); ?>';
        });

        Blade::directive('endcontent', function () {
            return '<?php $__env->stopSection(); ?>';
        });
    }
}
