<?php

namespace App\Observers;

use App\Models\BlogArticlesCategory;

class BlogArticlesCategoryObserver
{
    /**
     * Handle the blog article category "created" event.
     *
     * @param  \App\Models\BlogArticlesCategory  $blogArticlesCategory
     * @return void
     */
    public function created(BlogArticlesCategory $blogArticlesCategory)
    {
        //
    }

    /**
     *  @param BlogArticlesCategory $blogArticlesCategory
     */
    public function creating(BlogArticlesCategory $blogArticlesCategory)
    {

    }

    /**
     *  Если поле слаг пустое, то заполняем его конвертацией заголовка.
     *
     *  @param BlogArticlesCategory $blogArticlesCategory
     */
    protected function setSlug(BlogArticlesCategory $blogArticlesCategory)
    {
        if (empty($blogArticlesCategory->slug)){
            $blogArticlesCategory->slug = \Str::slug($blogArticlesCategory->title);
        }
    }
    /**
     * Handle the blog article category "updated" event.
     *
     * @param  \App\Models\BlogArticlesCategory  $blogArticlesCategory
     * @return void
     */
    public function updated(BlogArticlesCategory $blogArticlesCategory)
    {
        //
    }

    /**
     *
     * @param  BlogArticlesCategory  $blogArticlesCategory
     *
     */
    public function updating(BlogArticlesCategory $blogArticlesCategory)
    {
        $this->setSlug($blogArticlesCategory);
    }

    /**
     * Handle the blog article category "deleted" event.
     *
     * @param  \App\Models\BlogArticlesCategory  $blogArticlesCategory
     * @return void
     */
    public function deleted(BlogArticlesCategory $blogArticlesCategory)
    {
        //
    }

    /**
     * Handle the blog article category "restored" event.
     *
     * @param  \App\Models\BlogArticlesCategory  $blogArticlesCategory
     * @return void
     */
    public function restored(BlogArticlesCategory $blogArticlesCategory)
    {
        //
    }

    /**
     * Handle the blog article category "force deleted" event.
     *
     * @param  \App\Models\BlogArticlesCategory  $blogArticlesCategory
     * @return void
     */
    public function forceDeleted(BlogArticlesCategory $blogArticlesCategory)
    {
        //
    }
}
