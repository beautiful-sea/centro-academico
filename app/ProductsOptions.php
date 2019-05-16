<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsOptions extends Model
{	
	protected $fillable = ['name'];
	protected $table = "products_options";


    public function types(){
    	return $this->belongsToMany('App\ProductsOptionsTypes','options_has_types','id_products_options','id_products_options_types');
    }

    public function products_types(){
        return $this->hasManyThrough( 'App\ProductsHasOptionsTypes','App\ProductsOptionsTypes', 'id','id')->join('products_has_options','products_has_options.id','=','products_has_options_types.id_product_has_option')->
        	select('products_has_options_types.*','products_has_options.*','products_options_types.*');
    }


}
