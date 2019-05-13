<?php

namespace App\Http\Controllers\Admin;

use App\ProductsOptions;
use Illuminate\Http\Request;

class ProductsOptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductsOptions  $productsOptions
     * @return \Illuminate\Http\Response
     */
    public function show(ProductsOptions $productsOptions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductsOptions  $productsOptions
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductsOptions $productsOptions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductsOptions  $productsOptions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductsOptions $productsOptions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductsOptions  $productsOptions
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductsOptions $productsOptions,$id)
    {
        $this->authorize('destroy', $productsOptions);

        $productsOptions::find($id)->delete();
        return redirect()->route('products.config')->with('flash.success', 'Opção excluída com sucesso');
    }
}
