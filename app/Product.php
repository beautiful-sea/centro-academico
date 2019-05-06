<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;


class Product extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','minimum_stock','maximum_stock','value','value_partner','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function getProductAttributeImage() {
        if ($this->avatar_extension) {
            $image = sprintf('/files/users/%s.%s', $this->id, $this->avatar_extension);

            return '<img src="' . $image . '" class="img-circle elevation-2">';
        } else {
            $buffer = explode(' ', $this->name);
            $initials = '';
    
            if (!empty($buffer[1])) {
                $initials = strtoupper($buffer[0][0].$buffer[1][0]);
            } else {
                $initials = strtoupper($buffer[0][0]);
            }

            return '<div class="user-no-photo-avatar img-circle elevation-2">' . $initials . '</div>';
        }
    }

    public static function selectProducts(){
        $p = DB::table('products')->select('id', 'name')->get();
        $select = [];
        foreach ($p as $value) {
            $select = Arr::prepend($select,$value->id.' - '.$value->name,$value->id);
        }
        return $select;
    }

    public static function selectProductsInStock(){
        $p = Stock::with('product:id,name')->where('amount','>','0')->get();//Busca todos dados no estoque
        
        $atributes = $p->pluck('product')->map->only(['id','name']);//retorna todos produtos do estoque | pluck() serve para extratir somente o produto do relacionamento de stock + product

        $select = [];
        foreach ($atributes as $value) {
            $select = Arr::prepend($select,$value['id'].' - '.$value['name'],$value['id']);
        }        
        return $select;
    }

    public static function productsInStock(){
        // $p = Stock::with('product')->where('amount','>','0')->get();//Busca todos produtos no estoque
        $p = Product::with('stockable')->where('locked','0')->get();//Busca todos produtos
        return $p;
    }

    public function stock()
    {
        return $this->belongsTo('App\Stock','id_product');
    }

    public function stockable(){
        return $this->hasOne('App\Stock','id_product');
    }

    public function output_products()
    {
        return $this->belongsTo('App\OutputProducts','id');
    }

    public function input_products()
    {
        return $this->belongsTo('InputProducts','id_product');
    }
}
