<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $dates = [
        'deleted_at'
    ];

    protected $fillable = [
        'name',
        'slug',
        'order',
        'parent_category_id',
    ];
}
