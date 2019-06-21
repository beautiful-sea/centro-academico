<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LastPhotosCA extends Model
{
    protected $table = 'last_photos_ca';

    protected $fillable = ['name','description','extension_img'];
}
