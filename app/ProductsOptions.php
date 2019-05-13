<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsOptions extends Model
{	
	protected $fillable = ['name'];
	protected $table = "products_options";

    public function products(){
    	return $this->belongsToMany('App\Products','products_has_options_types','id_product');
    }

    public function products_options_types(){
    	return $this->hasMany('App\ProductsOptionsTypes','id_option');
    }
}
