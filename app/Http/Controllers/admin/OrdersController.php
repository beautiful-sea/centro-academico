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
            $order = new Order;

            $order['customer_name']  = $request->client['name'];
            $order['customer_email'] = $request->client['email'];
            $order['status'] = 0;

            $order->save();

            foreach ($request->cart as $product) {

                $order_items = new OrderItems;
                $order_items->id_order = $order->id;
                $order_items->id_product = $product['id'];
                $order_items->colors_id = $product['colors']['id'];
                $order_items->sizes_id = $product['sizes']['id'];
                $order_items->amount = $product['amount_order'];
                $order_items->unitary_value = ($request->client['is_partner'] == 1)?$product['value_partner']: $product['value'];
                $order_items->discount = null;

                $order_items->save();

            }
            return $order;
        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function show($id){
        $order = Order::find($id);
        $totalOrder = 0;

        foreach ($order->items as $o) {
           $totalOrder += ($o->amount * $o->unitary_value);
       }
       return view('admin.orders.show',[
        'order' =>  $order,
        'totalOrder' => $totalOrder
    ]);
   }

   public function edit($id){

   }

   public function destroy($id){

    $order = Order::find($id);
    $order->delete();

    return redirect()->route('orders.index');

    }

    public function generate_pdf($id){
        $order = Order::find($id);
        $totalOrder = 0;

        foreach ($order->items as $o) {
           $totalOrder += ($o->amount * $o->unitary_value);
        }

        return view('admin.orders.generate_PDF', compact('order','totalOrder'));
    }


}
