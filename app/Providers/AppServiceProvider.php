<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\PostMenu;

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
        // 將選單數據共享給所有視圖
        view()->composer('frontend.layouts.app', function ($view) {
            $view->with('menuItems', PostMenu::where('is_active', true)
                ->orderBy('id', 'asc')
                ->get());
        });
    }
}
