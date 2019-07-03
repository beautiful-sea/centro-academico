<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\OutputProducts;
use App\InputProducts;
use App\Stock;
use App\Order;
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
        $products = Product::orderBy('created_at','DESC')->get();
        $last_outputs = OutputProducts::orderBy('created_at','DESC')->get();
        $last_inputs = InputProducts::orderBy('created_at','DESC')->get();
        $bellowStock = Stock::getBellowStock();
        $ordersThisMonth = Order::getOrdersThisMonth();
        $profit = OutputProducts::getRawProfit();
        
        return view('admin.home',[
            'products'  =>  $products,
            'users'  =>  User::all(),
            'output_products'=>OutputProducts::all(),
            'stock' =>  Stock::all(),
            'ordersThisMonth' => $ordersThisMonth,
            'last_outputs'=>$last_outputs,
            'last_inputs'=>$last_inputs,
            'bellowStock'=>$bellowStock,
            'profit'    =>  $profit[0]->total]);
    }
}
