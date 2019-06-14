<?php

namespace App\Http\Controllers\Admin;

use App\Sizes;
use Illuminate\Http\Request;

class SizesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sizes  $sizes
     * @return \Illuminate\Http\Response
     */
    public function edit(Sizes $sizes,$id)
    {
        $size = Sizes::find($id);

        return view('admin.products.edit-sizes',[
            'size' => $size
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sizes  $sizes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sizes $sizes,$id)
    {
        $size = $sizes->find($id);

        $size->fill($request->all());

        $size->save();

        return redirect()->route('products.config')->with('flash.success', "Tamanho editado com sucesso.");
    }

}
