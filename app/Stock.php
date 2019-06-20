<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Stock extends Authenticatable
{

    protected $fillable = ['id_product','amount','unitary_value'];

    protected $with = ['color','size'];

    /**
     * Seleciona todos produtos com quantidade abaixo do valor mínimo no estoque
     * @return array
     */
    public static function getBellowStock(){
        return DB::select(' select * from `stocks` left join `products` on `products`.`id` = `stocks`.`id_product` where `products`.`minimum_stock` >= `stocks`.`amount` ');
    }
    public function product()
    {
        return $this->hasOne('App\Product','id','id_product');
    }

    public function productable()
    {
        return $this->belongsTo('App\Product','id','id_product');
    }
    public function getBelowStock(Stock $stock){//Produtos abaixo do estoque
        
        return $stock->all();
    }

    public function color(){
        return $this->hasOne('App\Colors','id','colors_id');
    }

    public function size(){
        return $this->hasOne('App\Sizes','id','sizes_id');
    }

}
