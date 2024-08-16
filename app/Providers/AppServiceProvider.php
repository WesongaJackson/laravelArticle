<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\View; // Add this line to import the View class

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
        //
        View::composer('*', function ($view) {
            $categories = Category::latest()->get();
            $tags = Tag::latest()->get();
            $view->with(compact('categories', 'tags'));
        });
    }
}
