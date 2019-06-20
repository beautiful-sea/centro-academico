<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class OutputProducts extends Authenticatable
{

    protected $fillable = ['id_product','amount','unitary_value','sizes_id','colors_id'];

    protected $table = "output_products";
    protected $with = ['product'];
    protected $date = ['created_at','updated_at'];

    /**
     * Seleciona a soma dos (pedidos * quantidade) realizadas no mes atual
     * @return array
     */
    public static function getRawProfit(){
    	return DB::select('select sum( unitary_value * amount) as total from output_products where MONTH(`created_at`) = '. date('m').' and YEAR(`created_at`) = '.date('Y'));
    }
    public function product()
    {
        return $this->hasOne('App\Product','id','id_product');
    }

}
