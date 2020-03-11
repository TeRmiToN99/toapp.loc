<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class BlogArticlesCategory
 *
 * @package App\Models
 *
 *
 */
class ProductsCategory extends Model
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
            'description',
        ];
}
