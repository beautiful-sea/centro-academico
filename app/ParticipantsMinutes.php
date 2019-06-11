<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantsMinutes extends Model
{
    protected $fillable = ['name','area','job_title'];

    protected $timestamp = false;

}
