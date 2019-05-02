<?php

namespace App\Http\Controllers;

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
        $stock = new Stock;
        return view('stock.index',['stock'  =>  $stock->all()]);
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
        $data['unitary_value'] =  (float)str_replace(['R$ ',','], ['','.'], $data['unitary_value']) ;
        dd($data);
        unset($data['operation']);
        $input_products->fill($request->all());
        $input_products->save();  
        
        return redirect()->route('stock.index')->with('flash.success',
        'Produto '.(($operation == 0)? 'adicionado' : 'removido').' ao estoque com sucesso.');
    }

    public function input(){
        $stock = new Stock;
        return view('stock.input',['stock'=>$stock]);
    }

    public function output(){
        $stock = new Stock;
        return view('stock.output',['stock'=>$stock]);
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
        //
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
