<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamEng extends Model
{
	protected $table = 'team_eng';
	protected $fillable = ['name','description','extension_img','linkedin','instagram','lattes'];
}
