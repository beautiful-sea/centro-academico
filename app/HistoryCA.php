<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryCA extends Model
{
    protected $table = 'history_ca';

    protected $fillable = ['text'];


    // public static function splitHistoryCA($history_ca){

    // 	$len = strlen($history_ca->text);

    // 	$text = [];

    // 	$string1 = substr($history_ca,($len / 2));
    // 	$string2 = substr($history_ca,($len / 2),$len);

    // 	$text = [$string1, $string2];

    // 	return $text;
    // }
}
