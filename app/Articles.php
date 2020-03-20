<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = [
        'title', 'description', 'short_description',
        'image', 'views', 'likes', 'created_at', 'coments',
    ];
}
