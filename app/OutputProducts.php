<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class OutputProducts extends Authenticatable
{

    protected $fillable = ['id_product','amount','unitary_value'
    ];

    protected $table = "output_products";
    protected $with = ['product'];
    protected $date = ['created_at','updated_at'];

    public function product()
    {
        return $this->hasOne('App\Product','id','id_product');
    }

}
