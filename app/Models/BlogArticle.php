<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogArticle extends Model
{
    use SoftDeletes;
/**
 * Категория статьи.
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
    public function category()
    {
        // Статья принадлежит категории
        return $this->belongsTo(BlogArticlesCategory::class);
    }

    /**
     * Автор статьи
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        // Статья принадлежит пользователю
        return $this->belongsTo(User::class);
    }
}
