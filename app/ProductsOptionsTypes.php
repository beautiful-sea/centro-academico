<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsOptionsTypes extends Model
{	
    protected $visible 		= ['id','name','option','id_option'];

    protected $primaryKey 	= 'id';

    protected $table 		= "products_options_types";

    // protected $with			= "option";

    public function option(){
    	return $this->belongsTo('App\ProductsOptions','id_option');
    }

}
