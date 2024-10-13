<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCategorySearch extends Model
{
    protected $dates = [
        'deleted_at'
    ];

    protected $fillable = [
        'article_id',
        'article_category_id',
        'is_main_category',
    ];
}
