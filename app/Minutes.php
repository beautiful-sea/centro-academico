<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minutes extends Model
{
    protected $fillable = ['date','start_time','end_time'];
}