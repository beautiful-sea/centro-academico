<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamCA extends Model
{
    protected $table = 'team_ca';

	protected $fillable = ['name','description','extension_img','linkedin','instagram','lattes'];
    
}
