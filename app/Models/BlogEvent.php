<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogEvent extends Model
{
    protected $fillable = ['category_id', 'title', 'desc', 'text', 'user_id'];
}
