<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsAthletic extends Model
{
    protected $table = 'news_athletic';

    protected $fillable = ['title','text','extension_img','description','created_at'];
}
