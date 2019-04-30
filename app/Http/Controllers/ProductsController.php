<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
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

        $products = Product::orderBy('name')->get();

        return view('products.index',['products' => $products]);
    }

    public function create()
    {
        $this->authorize('create', Product::class);

        $product = new Product;

        return view('products.create', [
            'product' => $product
        ]);
    }

    public function store(Request $request)
    {
        $product = new Product;

        $product->fill($request->all());

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();

            $product->image_extension = $extension;
        }  


        Arr::pull($product,'image');

        $product->save();

        if ($request->hasFile('image')) {
            $request->file('image')->move(base_path('/public/files/products'), sprintf('%s.%s', $product->id, $extension));
        }        

        return redirect()->route('products.index')->with('flash.success', 'Produto cadastrado com sucesso');
    }

    public function edit(Product $product)
    {
        $this->authorize('edit', $product);

        return view('products.edit', [
            'product' => $product
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
        $product->save();

        if ($request->hasFile('image')) {
            $request->file('image')->move(base_path('/public/files/products'), sprintf('%s.%s', $product->id, $extension));
        }

      

        return redirect()->route('products.index')->with('flash.success', 'Produto salvo com sucesso');
    }

    public function destroy(Product $product)
    {
        $this->authorize('destroy', $product);

        $product->delete();

        return redirect()->route('products.index')->with('flash.success', 'Produto excluído com sucesso');
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
