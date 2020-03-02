<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class BlogArticlesCategory
 *
 * @package App\Models
 *
 * @property-read  BlogArticlesCategory $parentCategory
 * @property-read string                $parentTitle
 */
class BlogArticlesCategory extends Model
{
    use SoftDeletes;
    /**
     * ID корня
     */
    const ROOT = 1;

    protected $fillable
        =[
            'title',
            'slug',
            'parent_id',
            'description',
        ];

    /**
     * Получить родительскую категорию
     *
     * @return BlogArticlesCategory
     */
    public function parentCategory()
    {
        return $this->belongsTo(BlogArticlesCategory::class, 'parent_id', 'id');
    }

    /**
     * Пример аксесуара (Accessor)
     * @url https://laravel.com/docs/6.x/eloquent-mutators
     *
     * @return string
     */
    public function getParentTitleAttribute()
    {
        $title = $this->parentCategory->title
            ?? ($this->id === \App\Models\BlogArticlesCategory::ROOT
                ? 'Корень'
                : '???');
        return $title;
    }

    /**
     * Является ли текущий объект корнем
     *
     * @return bool
     */
    public function isRoot()
    {
        return $this->id === BlogArticlesCategory::ROOT;
    }

    /**
     * Пример аксессуара
     *
     * @param string $valueFromDB
     *
     * @return boo|mixed|null|string|string[]
     */
   /* public function getTitleAttribute($valueFromObject)
    {
        return mb_strtoupper($valueFromObject);
    }*/

    /**
     * Пример мутатора
     *
     * @param string $incomingValue
     */
   /* public function setTitleAttribute($incomingValue)
    {
        $this->attributes['title'] = mb_strtolower($incomingValue);
    }*/
}
