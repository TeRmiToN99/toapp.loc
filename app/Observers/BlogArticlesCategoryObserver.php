<?php

namespace App\Observers;

use App\Models\BlogArticleCategory;

class BlogArticlesCategoryObserver
{
    /**
     * Handle the blog article category "created" event.
     *
     * @param  \App\Models\BlogArticleCategory  $blogArticleCategory
     * @return void
     */
    public function created(BlogArticleCategory $blogArticleCategory)
    {
        //
    }

    /**
     * Handle the blog article category "updated" event.
     *
     * @param  \App\Models\BlogArticleCategory  $blogArticleCategory
     * @return void
     */
    public function updated(BlogArticleCategory $blogArticleCategory)
    {
        //
    }

    /**
     * Handle the blog article category "deleted" event.
     *
     * @param  \App\Models\BlogArticleCategory  $blogArticleCategory
     * @return void
     */
    public function deleted(BlogArticleCategory $blogArticleCategory)
    {
        //
    }

    /**
     * Handle the blog article category "restored" event.
     *
     * @param  \App\Models\BlogArticleCategory  $blogArticleCategory
     * @return void
     */
    public function restored(BlogArticleCategory $blogArticleCategory)
    {
        //
    }

    /**
     * Handle the blog article category "force deleted" event.
     *
     * @param  \App\Models\BlogArticleCategory  $blogArticleCategory
     * @return void
     */
    public function forceDeleted(BlogArticleCategory $blogArticleCategory)
    {
        //
    }
}
