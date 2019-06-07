<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \App\Order;

class OrdersController extends Controller
{
    public function store(Request $request){

        $order = new Order;

        $order['customer_name']  = $request->client->name;
        $order['customer_email'] = $request->client->email;
        
        return json_encode($request->all());
    }   
}
