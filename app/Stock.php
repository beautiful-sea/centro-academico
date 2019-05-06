<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Stock extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_product','amount','unitary_value'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

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
