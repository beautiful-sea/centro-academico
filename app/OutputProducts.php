<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class OutputProducts extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_product','amount','unitary_value'
    ];

    protected $table = "output_products";
    protected $with = ['product'];
    protected $date = ['created_at','updated_at'];
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

}