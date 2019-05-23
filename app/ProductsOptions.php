<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsOptions extends Model
{	
	protected $fillable = ['name'];
	protected $table = "products_options";
	protected $with  = "products_has_types";

    public function types(){
    	return $this->belongsToMany('App\ProductsOptionsTypes','options_has_types','id_products_options','id_products_options_types');
    }

    public function products_has_types(){
        return $this->belongsToMany('App\ProductsOptionsTypes','products_has_options_types','id_products_options','id_products_options_types');
    }

}
