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
            'products_options_types' => $products_options_types,
            'products_options' => $products_options
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
        $products_options = new ProductsOptions;
        $data = $request->all();
        $products_options->name = $data['name'];

        //Insere a Opçao
        $products_options->save();

        //Para cada tipo de opção, criar um array com o nome do tipo e o id da Opção criada
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

        return redirect()->route('products.config');

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
    public function edit(ProductsOptionsTypes $productsOptionsTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductsOptionsTypes  $productsOptionsTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductsOptionsTypes $productsOptionsTypes)
    {
        //
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
        return redirect()->route('products.config')->with('flash.success', 'Tipo de Opção excluída com sucesso');
    }
}
