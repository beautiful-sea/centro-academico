<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\OutputProducts;
use App\InputProducts;
use App\Stock;
use Illuminate\Support\Facades\DB;
use Barryvdh\Debugbar\Facade as Debugbar;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = new Product;
        $users    = new User;
        $output_products = new OutputProducts;
        $input_products = new InputProducts;
        $stock = new Stock;
        $last_outputs = $output_products->orderBy('created_at','DESC')->get();
        $last_inputs = $input_products->orderBy('created_at','DESC')->get();
        $bellowStock = DB::select(' select * from `stocks` left join `products` on `products`.`id` = `stocks`.`id_product` where `products`.`minimum_stock` >= `stocks`.`amount` ');

        $bestSellers = DB::select('select op.id_product,p.name, sum(op.amount) amount from output_products as op
            inner join products p on (p.id = op.id_product)
            group by p.name,op.id_product order by op.amount DESC limit 5');

        return view('home',[
            'products'  =>  $products->all(),
            'users'  =>  $users->all(),
            'output_products'=>$output_products->all(),
            'stock' =>  $stock->all(),
            'last_outputs'=>$last_outputs,
            'last_inputs'=>$last_inputs,
            'bellowStock'=>$bellowStock,
            'bestSellers'=>$bestSellers]);
    }
}
