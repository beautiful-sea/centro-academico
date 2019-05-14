<?php

namespace App\Http\Controllers\Admin;

use App\ProductsOptionsTypes;

use App\ProductsOptions;

use Illuminate\Http\Request;

class ProductsOptionsTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products_options_types = ProductsOptionsTypes::all();
        $products_options = ProductsOptions::all();
        return view('admin.products.config',[
            'all_products_options_types' => $products_options_types,
            'product_option_type'   =>  (new ProductsOptionsTypes),
            'all_products_options' => $products_options
        ]);
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
        $data = [];
        $data["name"]       = $request->name;
        $data["id_option"]  = $request->id_option;
        ProductsOptionsTypes::insert($data);

        return redirect()->route('products.config')->with('flash.success','Opção de produto cadastrada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductsOptionsTypes  $productsOptionsTypes
     * @return \Illuminate\Http\Response
     */
    public function show(ProductsOptionsTypes $productsOptionsTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductsOptionsTypes  $productsOptionsTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductsOptionsTypes $productsOptionsTypes,$id)
    {
        return view('admin.products.edit-options-types',[
            'products_options_types' => $productsOptionsTypes->find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductsOptionsTypes  $productsOptionsTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $products_options_types = ProductsOptionsTypes::find($request->id);

        $products_options_types->name = $request->name;

        $products_options_types->save();

        return redirect()->route('products.config')->with('flash.success', 'Tipo de opção editada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductsOptionsTypes  $productsOptionsTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductsOptionsTypes $productsOptionsTypes,$id)
    {
        $this->authorize('destroy', $productsOptionsTypes);

        $productsOptionsTypes::find($id)->delete();
        return redirect()->route('products.config')->with('flash.success', 'Tipo de opção excluída com sucesso');
    }
}
