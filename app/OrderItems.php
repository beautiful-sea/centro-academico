<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $with = ['product','color','size'];


    public function product(){
    	return $this->hasOne('App\Product','id','id_product');
    }

    public function color(){
    	return $this->hasOne('App\Colors','id','colors_id');
    }

    public function size(){
    	return $this->hasOne('App\Sizes','id','sizes_id');
    }

}
