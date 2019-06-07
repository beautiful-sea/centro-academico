<?php

namespace App\Http\Controllers\Admin;

use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\InputProducts;
use App\OutputProducts;
use App\Product;
use App\Colors;
use App\Sizes;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stock = Stock::all();
        // dd($stock);
        return view('admin.stock.index',[
            'stock'  =>  $stock
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $operation = $request->operation;
        
        $products = ($operation == 0)? (new InputProducts) : (new OutputProducts);
        $data     = $request->all();

        //Remover 'R$' do valor recebido e converter em 'float'
        $data['unitary_value'] =  (float)str_replace(['R$ ',','], ['','.'], $data['unitary_value']) ;
        unset($data['operation']);
        //mesclar $request com a instância do produto
        $products->fill($data);

        $products->amount         = (int)$products->amount;
        $products->id_product     = (int)$products->id_product;
        $products->colors_id         = (int)$products->colors_id;
        $products->sizes_id          = (int)$products->sizes_id;
        // dd($products);
        $products->save();
        return redirect()->route('stock.index')->with('flash.success',
        'Produto '.(($operation == 0)? 'adicionado ao' : 'removido do').'  estoque com sucesso.');
    }

    public function input(){//código 0

        $stock = new Stock;
        $stock['operation'] = 0;
        $product = new Product;

        return view('admin.stock.input',[
            'stock'=>$stock,
            'all_colors'    => (Colors::all()),
            'all_sizes'     => (Sizes::all()),
            'sizes'         => $product->sizes()->get(),
            'colors'        => $product->colors()->get()
        ]);
    }

    public function output(){//código 1
        $stock = new Stock;
        $stock['operation'] = 1;
        $product = new Product;

        return view('admin.stock.output',[
            'stock'=>$stock,
            'all_colors'    => (Colors::all()),
            'all_sizes'     => (Sizes::all()),
            'sizes'         => $product->sizes()->get(),
            'colors'        => $product->colors()->get()
        ]);
    }

    public function findStockById($id){
        $stock = Stock::where('id_product',$id)->get();
        return $stock;
    }

    public function findProductById($id){
        $product = Product::find($id);
        return $product;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {   
        return view('admin.stock.edit',['stock'=>$stock]);
    }

}
