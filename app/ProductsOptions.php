<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsOptions extends Model
{
	protected $table = "products_options";

	protected $with = "products_options_types";

    public function products(){
    	return $this->belongsToMany('App\Products','products_has_options','id');
    }

    public function products_options_types(){
    	return $this->hasMany('App\ProductsOptionsTypes','id_option');
    }
}
