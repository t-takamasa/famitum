<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $dates = [
        'deleted_at'
    ];

    protected $fillable = [
        'title',
        'body',
        'description',
        'recommend_order',
        'view_count',
    ];
}
