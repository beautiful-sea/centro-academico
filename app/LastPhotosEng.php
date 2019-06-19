<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LastPhotosEng extends Model
{
    protected $table = 'last_photos_eng';

    protected $fillable = ['title','created_at','name','extension_img','description'];
}
