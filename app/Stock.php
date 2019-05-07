<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Stock extends Authenticatable
{

    protected $fillable = ['id_product','amount','unitary_value'];


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

}
