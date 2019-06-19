<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AthleticData extends Model
{
    protected $fillable = ['prizes','trophies','games_won','partners'];
}
