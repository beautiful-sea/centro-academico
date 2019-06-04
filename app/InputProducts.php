<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class InputProducts extends Authenticatable
{

    protected $fillable = ['id_product','amount','unitary_value','sizes_id','colors_id'];

    protected $table = "input_products";
    protected $with = ['product'];
    protected $date = ['created_at','updated_at'];


    public function product()
    {
        return $this->hasOne('App\Product','id','id_product');
    }
}
