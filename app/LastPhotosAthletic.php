<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LastPhotosAthletic extends Model
{
    protected $table = 'last_photos_athletic';
    protected $fillable = ['name','description','extension_img','created_at'];
}
