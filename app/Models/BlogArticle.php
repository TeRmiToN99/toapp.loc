<?php

namespace App\Models;

use App\Http\Requests\BlogArticleUpdateRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *  Class BlogArticle
 *
 *  @package App\Models
 *
 *  @property \App\Models\BlogArticlesCategory  $category
 *  @property \App\Models\User                  $user
 *  @property string                            $title
 *  @property string                            $slug
 *  @property string                            $content_html
 *  @property string                            $content_raw
 *  @property string                            $excerpt
 *  @property string                            $published_at
 *  @property boolean                           $is_published
 */
class BlogArticle extends Model
{
    use SoftDeletes;

    protected  $fillable
        =[
            'title',
            'slug',
            'category_id',
            'excerpt',
            'content_raw',
            'is_published',
            'published_at',
            'user_id',
        ];
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
