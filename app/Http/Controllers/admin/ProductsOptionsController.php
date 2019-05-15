<?php

namespace App\Http\Controllers\Admin;

use App\ProductsOptions;
use App\ProductsOptionsTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsOptionsController extends Controller
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
            'all_products_options' => $products_options,
            'options'   =>  ProductsOptions::with('types')->get()
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
        $request = $request->all();

        if(isset($request['options_types'])){
             $options = new ProductsOptions;
             $options->name = $request['name'];
             $options->save();

            foreach ($request['options_types'] as $value) {
                $types = new ProductsOptionsTypes;
                $types->name = $value;
                ProductsOptions::find($options->id)->types()->save($types);
            }
        
        }else{
           $options = new ProductsOptions;
           $options->name = $request['name'];
           $options->save();
       }
       return redirect()->route('products.config')->with('flash.success', 'Opção cadastrada com sucesso');

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
    public function edit(ProductsOptions $productsOptions,$id)
    {
        return view('admin.products.edit-options',[
            'products_options' => $productsOptions->find($id)
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductsOptions  $productsOptions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $products_options = ProductsOptions::find($request->id);
        $products_options->name = $request->name;
        $products_options->save();

        return redirect()->route('products.config')->with('flash.success', 'Opção editada com sucesso');
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
        $productsOptions->find($id)->types()->delete();
        $productsOptions->find($id)->delete();
        return redirect()->route('products.config')->with('flash.success', 'Opção excluída com sucesso');
    }
}
