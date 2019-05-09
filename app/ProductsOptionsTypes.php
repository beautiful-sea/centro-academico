<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsOptionsTypes extends Model
{	
    protected $visible = ['id','name'];
    public function options(){
    	return $this->belongsToMany('App\ProductsOptions','id_options');
    }
}
