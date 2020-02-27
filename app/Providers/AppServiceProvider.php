<?php

namespace App\Providers;

use App\Models\BlogArticle;
use App\Models\BlogArticlesCategory;
use App\Observers\BlogArticleObserver;
use App\Observers\BlogArticlesCategoryObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        BlogArticle::observe(BlogArticleObserver::class);
        BlogArticlesCategory::observe(BlogArticlesCategoryObserver::class);
    }
}
