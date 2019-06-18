<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \App\Order;
use \App\OrderItems;
use \App\OutputProducts;
class OrdersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
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

                /**
                 * Cria Pedido
                 */
                $order_items = new OrderItems;
                $order_items->id_order = $order->id;
                $order_items->id_product = $product['id'];
                $order_items->colors_id = ($product['colors']['id'])?$product['colors']['id']:0;
                $order_items->sizes_id = ($product['sizes']['id'])?$product['sizes']['id']:0;
                $order_items->amount = $product['amount_order'];
                $order_items->unitary_value = ($request->client['is_partner'] == 1)?$product['value_partner']: $product['value'];
                $order_items->discount = null;
                $order_items->save();

                /**
                 * Retira do estoque os produtos comprados
                 */

                $output = new OutputProducts;
                // //Remover 'R$' do valor recebido e converter em 'float'
                // $product['unitary_value'] =  (float)str_replace(['R$ ',','], ['','.'], $product['unitary_value']) ;
                //mesclar $request com a instância do produto
                
                $output->unitary_value = $order_items->unitary_value;
                $output->amount        = (int)$order_items->amount;
                $output->id_product    = (int)$order_items->id_product;
                $output->colors_id     = (int)$order_items->colors_id;
                $output->sizes_id      = (int)$order_items->sizes_id;

                $output->save();

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

    public function salesInYear(){
        
        $sales = Array();

        for ($i=0; $i < 12; $i++) { 
            $monthData = OutputProducts::whereMonth('created_at', '=', ($i+1))
            ->whereYear('created_at','=',date("Y"))->count();
            array_push($sales, $monthData);
        }

        return $sales;
    }

    public function getBestSellers(){
        $sellers = OutputProducts::all()->groupBy('id_product');

        return $sellers;  
    }


}
