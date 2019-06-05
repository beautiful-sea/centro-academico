<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Product;
use App\Colors;
use App\Sizes;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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

        $products = Product::all();
        return view('admin.products.index',[
            'products' => $products]);
    }

    public function create()
    {
        $this->authorize('create', Product::class);

        $product = new Product;

        return view('admin.products.create', [
            'product'       => $product,
            'all_colors'    => (Colors::all()),
            'all_sizes'     => (Sizes::all()),
            'sizes'         => '[]',
            'colors'        => '[]'
        ]);
    }

    public function store(Request $request)
    {
        $product = new Product;
        
        $data = $request->all();

        //Formata o valor do produto de string para float
        $data['value'] = (float)str_replace(['R$ ',','],['','.'], $data['value']);
        $data['value_partner'] = (float)str_replace(['R$ ',','],['','.'], $data['value_partner']);          

        $product->fill($data);      

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $product->image_extension = $extension;
        }  

        Arr::pull($product,'image');
        $product->locked = 1;
        $product->save();

        if(isset($request->colors) || isset($request->sizes)){
            $product->colors()->sync($request->colors);
            $product->sizes()->sync($request->sizes);
        }

        if ($request->hasFile('image')) {
            $request->file('image')->move(base_path('/public/files/products'), sprintf('%s.%s', $product->id, $extension));
        }        

        return redirect()->route('products.index')->with('flash.success', 'Produto cadastrado com sucesso');
    }

    public function edit(Product $product)
    {
        $this->authorize('edit', $product);

        return view('admin.products.edit', [
            'product'       => $product,
            'all_colors'    => (Colors::all()),
            'all_sizes'     => (Sizes::all()),
            'sizes'         => $product->sizes()->get(),
            'colors'        => $product->colors()->get()
        ]);

    }

    public function update(Request $request,$id)
    {
        $product = Product::find($request->id);

        $product->fill($request->all());

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();

            $product->image_extension = $extension;
        }

        Arr::pull($product,'image');

        if(isset($request->colors) || isset($request->sizes)){
            $product->colors()->sync($request->colors);
            $product->sizes()->sync($request->sizes);
        }
        
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

    public function config(){

        return view('admin.products.config',[
            'colors' => (Colors::all()),
            'sizes' => (Sizes::all())
        ]);
    }

    public function defineTypeToStore(Request $request){

        if($request->option == 'sizes'){
            $size = new Sizes;

            $size->name = $request->name;

            $size->save();

        }elseif($request->option == 'colors'){
            $color = new Colors;

            $color->name = $request->name;

            $color->save();
        }

        $type_name = ($request->option == 'sizes')?'Tamanho':'Cor';
        return redirect()->route('products.config')->with('flash.success', "$type_name cadastrado(a) com sucesso.");
    }

}
