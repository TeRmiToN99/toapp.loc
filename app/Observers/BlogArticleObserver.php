<?php

namespace App\Observers;

use App\Models\BlogArticle;
use Carbon\Carbon;

class BlogArticleObserver
{

    /**
     *  Отработка ПЕРЕД созданием записи
     *
     *  @param BlogArticle  $blogArticle
     */
    public function creating(BlogArticle $blogArticle)
    {
        $this->setPublishedAt($blogArticle);

        $this->setSlug($blogArticle);

        $this->setHtml($blogArticle);

        $this->setUser($blogArticle);
    }

    /**
     *  Отработка ПЕРЕД обновлением записи
     *
     *  @param BlogArticle  $blogArticle
     */
    public function updating(BlogArticle $blogArticle)
    {
//        $test[] = $blogArticle->isDirty();
//        $test[] = $blogArticle->isDirty('is_published');
//        $test[] = $blogArticle->isDirty('user_id');
//        $test[] = $blogArticle->getAttribute('is_published');
//        $test[] = $blogArticle->is_published;
//        $test[] = $blogArticle->getOriginal('is_published');
//        dd($test);

        $this->setPublishedAt($blogArticle);

        $this->setSlug($blogArticle);
    }

    /**
     *  Если дата публикации не установлена и происходит установка флага - Опубликовано,
     *  то устанавливаем дату публикации на текущую.
     *
     *  @param BlogArticle $blogArticle
     */
    protected function setPublishedAt(BlogArticle $blogArticle)
    {
        $needSetPublished = empty($blogArticle->published_at) && $blogArticle->is_published;
        if ($needSetPublished) {
            $blogArticle->published_at = Carbon::now();
        }
    }

    /**
     *  Если поле слаг пустое, то заполняем его конвертацией заголовка.
     *
     *  @param BlogArticle $blogArticle
     */
    protected function setSlug(BlogArticle $blogArticle)
    {
        if (empty($blogArticle->slug)){
            $blogArticle->slug = \Str::slug($blogArticle->title);
        }
    }

    /**
     * Установка значения полю content_html оносительно поля content_raw.
     *
     * @param BlogArticle $blogArticle
     */
    protected function setHtml(BlogArticle $blogArticle)
    {
        if ($blogArticle->isDirty('content_raw')) {
            // TODO: Тут должна быть генерация markdown -> html
            $blogArticle->content_html = $blogArticle->content_raw;
        }
    }

    /**
     * Если не указан user_id, то устанавливаем пользователя по-умолчанию
     *
     * @param BlogArticle $blogArticle
     */
    protected function setUser(BlogArticle $blogArticle)
    {
        $blogArticle->user_id = auth()->id() ?? BlogArticle::UNKKNOW_USER;
    }

    /**
     * Handle the blog article "created" event.
     *
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return void
     */
    public function created(BlogArticle $blogArticle)
    {
        dd(__METHOD__, $blogArticle);
    }

    /**
     * Handle the blog article "updated" event.
     *
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return void
     */
    public function updated(BlogArticle $blogArticle)
    {
        dd(__METHOD__, $blogArticle);
    }

    /**
     * Handle the blog article "deleting" event.
     *
     * @param  \App\Models\BlogArticle  $blogArticle
     *
     */
    public function deleting(BlogArticle $blogArticle)
    {
        dd(__METHOD__, $blogArticle);
    }

    /**
     * Handle the blog article "deleted" event.
     *
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return void
     */
    public function deleted(BlogArticle $blogArticle)
    {
        dd(__METHOD__, $blogArticle);
    }


    /**
     * Handle the blog article "restored" event.
     *
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return void
     */
    public function restored(BlogArticle $blogArticle)
    {
        dd(__METHOD__, $blogArticle);
    }

    /**
     * Handle the blog article "force deleted" event.
     *
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return void
     */
    public function forceDeleted(BlogArticle $blogArticle)
    {
        dd(__METHOD__, $blogArticle);
    }
}
