<?php

namespace App\Http\Controllers\Admin;

use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\InputProducts;
use App\OutputProducts;

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

        return view('admin.stock.index',['stock'  =>  $stock]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $data = $request->all();
        //Remover 'R$' do valor recebido e converter em 'float'
        $data['unitary_value'] =  (float)str_replace(['R$ ',','], ['','.'], $data['unitary_value']) ;
        unset($data['operation']);
        //mesclar $request com a instância do produto
        $products->fill($data);
        $products->amount         = (int)$products->amount;
        $products->id_product     = (int)$products->id_product;
        $products->save();
        return redirect()->route('stock.index')->with('flash.success',
        'Produto '.(($operation == 0)? 'adicionado ao' : 'removido do').'  estoque com sucesso.');
    }

    public function input(){//código 0

        $stock = new Stock;
        $stock['operation'] = 0;
        return view('admin.stock.input',['stock'=>$stock]);
    }

    public function findById($id){
        $stock = Stock::where('id_product',$id)->get();
        return $stock;
    }

    public function output(){//código 1
        $stock = new Stock;
        $stock['operation'] = 1;
        return view('admin.stock.output',['stock'=>$stock]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
