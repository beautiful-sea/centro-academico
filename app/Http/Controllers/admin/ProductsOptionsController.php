<?php

namespace App\Http\Controllers\Admin;

use App\ProductsOptions;
use App\ProductsOptionsTypes;
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
        $products_options = new ProductsOptions;
        $data = $request->all();
        $products_options->name = $data['name'];

        //Insere a Opçao
        $products_options->save();

        //Para cada tipo de opção, criar um array com o nome do tipo e o id da Opção criada
        if(isset($data['options_types'])){

            $types = [];
            foreach ($data['options_types'] as $value) {
                array_push($types, [
                    "id_option" =>  $products_options->id,
                    "name"      =>  $value,
                    "created_at"=>  date("Y-m-d H:i:s"),
                    "updated_at"=>  date("Y-m-d H:i:s")
                ]);
            }

        //Insere os tipos de opção relacionados com a opção
            ProductsOptionsTypes::insert($types);            
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

        $productsOptions::find($id)->delete();
        return redirect()->route('products.config')->with('flash.success', 'Opção excluída com sucesso');
    }
}
