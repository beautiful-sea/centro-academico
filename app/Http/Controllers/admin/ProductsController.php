<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Product;
use App\ProductsOptions;
use App\ProductsOptionsTypes;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Arr;


class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['storeFirstUser']]);
    }


    public function index()
    {
        $this->authorize('index', Product::class);

        $products = Product::with('types')->orderBy('name')->get();
        return view('admin.products.index',[
            'products' => $products]);
    }

    public function create()
    {
        $this->authorize('create', Product::class);

        $product = new Product;

        $options =  ProductsOptions::with('products_options_types')->get();
        return view('admin.products.create', [
            'product' => $product,
            'options' => $options
        ]);
    }

    public function store(Request $request)
    {
        $product = new Product;
        
        $data = $request->all();

        $products_options       = $request->products_options;
        $products_options_types = $request->products_options_types;

        //Formata o valor do produto de string para float
        $data['value'] = (float)str_replace(['R$ ',','],['','.'], $data['value']);
        $data['value_partner'] = (float)str_replace(['R$ ',','],['','.'], $data['value_partner']);          

        $product->fill($data);      

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $product->image_extension = $extension;
        }  

        Arr::pull($product,'image');
        $product->save();

        Product::insertOptionsTypesToProduct($product->id,$products_options_types);

        if ($request->hasFile('image')) {
            $request->file('image')->move(base_path('/public/files/products'), sprintf('%s.%s', $product->id, $extension));
        }        

        return redirect()->route('products.index')->with('flash.success', 'Produto cadastrado com sucesso');
    }

    public function edit(Product $product)
    {
        $this->authorize('edit', $product);

        $options = ProductsOptions::with('products_options_types')->get();
        
        return view('admin.products.edit', [
            'product' => $product,
            'options' => $options
        ]);

    }

    public function update(Request $request)
    {
        $product = Product::find($request->id);


        $product->fill($request->all());

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();

            $product->image_extension = $extension;
        }
        Arr::pull($product,'image');

        $product->types()->sync($request->products_options_types);
        $product->save();
        if ($request->hasFile('image')) {
            $request->file('image')->move(base_path('/public/files/products'), sprintf('%s.%s', $product->id, $extension));
        }

      

        return redirect()->route('products.index')->with('flash.success', 'Produto salvo com sucesso');
    }

    public function destroy(Product $product)
    {
        // $this->authorize('destroy', $product);

        // $product->delete();

        // return redirect()->route('products.index')->with('flash.success', 'Produto excluído com sucesso');
    }


    public function block(Product $product) {
        $this->authorize('block', $product);

        $product->locked = true;

        $product->save();

        return redirect()->route('products.index')->with('flash.success', 'Produto bloqueado com sucesso');
    }

    public function unblock(Product $product) {
        $this->authorize('unblock', $product);

        $product->locked = false;

        $product->save();

        return redirect()->route('products.index')->with('flash.success', 'Produto desbloqueado com sucesso');
    }

}
