<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AthleticTeams extends Model
{
    protected $table = "athletic_teams";

    protected $fillable = ['name','icon','link','description'];
}
