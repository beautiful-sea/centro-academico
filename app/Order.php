<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \App\OrderItems;
use Illuminate\Support\Facades\DB;

class Order extends Authenticatable
{
    protected $fillable = ['customer_name','customer_email','status','delivered_at'];
    protected $date = ['created_at','updated_at'];
    protected $with = ['items'];

    /**
     * Seleciona todos os pedidos feitos no mês atual
     * @return array
     */
    public static function getOrdersThisMonth(){
        $month = date('m');//Mês atual

        return DB::select("select * from orders where MONTH(created_at) = $month");
    }


    public function items(){
    	return $this->hasMany('App\OrderItems','id_order','id');
    }
}
