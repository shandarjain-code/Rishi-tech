<?php

namespace App\Providers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
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
        if (env('APP_ENV') !== 'local') {
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }
        $link = public_path('storage');
        $target = storage_path('app/public');

        if (! File::exists($link) && File::isDirectory($target)) {
            try {
                Artisan::call('storage:link');
            } catch (\Throwable) {
                // Symlink may require manual: php artisan storage:link
            }
        }
    }
}
