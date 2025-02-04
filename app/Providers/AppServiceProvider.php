<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\PostMenu;
use App\Models\SocialLink;
use Illuminate\Support\Facades\View;

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
        // 共享菜單項目到所有視圖
        View::composer('*', function ($view) {
            $menuItems = PostMenu::where('is_active', true)->get();
            $socialLinks = SocialLink::first();

            $view->with([
                'menuItems' => $menuItems,
                'socialLinks' => $socialLinks
            ]);
        });
    }
}
