<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamAthletic extends Model
{
    protected $table = "team_athletic";

	protected $fillable = ['name','description','extension_img','linkedin','instagram'];

}
