<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minutes extends Model
{
    protected $fillable = ['date','start_time','end_time'];

    protected $with = ['participants','schedules'];

    public function participants(){
    	return $this->belongsToMany('App\ParticipantsMinutes','minutes_has_participants','minutes_id','participants_id');
    }
    public function schedules(){
    	return $this->belongsToMany('App\ScheduleMinutes','minutes_has_schedules','minutes_id','schedules_id');
    }
}
