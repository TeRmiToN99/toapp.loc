<?php

namespace App\Models;

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
class Product extends Model
{
    use SoftDeletes;

    const  UNKKNOW_USER = 1;

    protected  $fillable
        =[
            'title',
            'slug',
            'category_id',
            'excerpt',
            'content_raw',
            'is_published',
            'published_at',
        ];

    /**
     * Категория карточек товаров.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        // Статья принадлежит категории
        return $this->belongsTo(ProductsCategory::class);
    }

    /**
     * Автор создания карточки товара
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        // Карточка товара принадлежит пользователю
        return $this->belongsTo(User::class);
    }

}
