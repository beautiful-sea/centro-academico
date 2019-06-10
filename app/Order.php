<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \App\OrderItems;

class Order extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['customer_name','customer_email','status','delivered_at'];
    protected $date = ['created_at','updated_at'];
    protected $with = ['items'];

    public function items(){
    	return $this->hasMany('App\OrderItems','id_order','id');
    }
}
