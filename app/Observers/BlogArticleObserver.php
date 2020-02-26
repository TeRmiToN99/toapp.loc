<?php

namespace App\Observers;

use App\Models\BlogArticle;

class BlogArticleObserver
{

    /**
     *  Отработка ПЕРЕД созданием записи
     *
     *  @param BlogArticle  $blogArticle
     */
    public function creating(BlogArticle $blogArticle){

    }

    /**
     *  Отработка ПЕРЕД обновлением записи
     *
     *  @param BlogArticle  $blogArticle
     */
    public function updating(BlogArticle $blogArticle){
        $this->setPublishedAt($blogArticle);

        $this->setSlug($blogArticle);
    }

    /**
     *  Если дата публикации не установлена и происходит установка флага - Опубликовано,
     *  то устанавливаем дату публикации на текущую.
     *
     *  @param BlogArticle $blogArticle
     */

    /**
     * Handle the blog article "created" event.
     *
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return void
     */
    public function created(BlogArticle $blogArticle)
    {
        //
    }

    /**
     * Handle the blog article "updated" event.
     *
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return void
     */
    public function updated(BlogArticle $blogArticle)
    {
        //
    }

    /**
     * Handle the blog article "deleted" event.
     *
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return void
     */
    public function deleted(BlogArticle $blogArticle)
    {
        //
    }

    /**
     * Handle the blog article "restored" event.
     *
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return void
     */
    public function restored(BlogArticle $blogArticle)
    {
        //
    }

    /**
     * Handle the blog article "force deleted" event.
     *
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return void
     */
    public function forceDeleted(BlogArticle $blogArticle)
    {
        //
    }
}
