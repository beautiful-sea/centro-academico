<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \App\Order;
use \App\OrderItems;

class OrdersController extends Controller
{
    public function index(){
        $orders = Order::all();

        return view('admin.orders.index',[
            'orders' => $orders
        ]);
    }

    public function store(Request $request){
        try{
            // $order = new Order;

            // $order['customer_name']  = "Lindomar Silva";
            // $order['customer_email'] = "lindomar1016@hotmail.com";
            // $order['status'] = 0;

            // $order->save();

            // foreach ($request->cart as $product) {

            //     $order_items = new OrderItems;
            //     $order_items->id_order = $order->id;
            //     $order_items->id_product = $product['id'];
            //     $order_items->colors_id = $product['colors']['id'];
            //     $order_items->sizes_id = $product['sizes']['id'];
            //     $order_items->amount = $product['amount_order'];
            //     $order_items->unitary_value = ($request->client['is_partner'] == 1)?$product['value_partner']: $product['value'];
            //     $order_items->discount = null;

            //     $order_items->save();

            // }
            $order = Order::find(2);
            return $order;
        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function show(Request $request){
        echo 'asda';
    }

    public function edit(){
        
    }


}
