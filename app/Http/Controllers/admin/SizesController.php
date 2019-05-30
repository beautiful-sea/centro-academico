<?php

namespace App\Http\Controllers\Admin;

use App\Sizes;
use Illuminate\Http\Request;

class SizesController extends Controller
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
     * @param  \App\Sizes  $sizes
     * @return \Illuminate\Http\Response
     */
    public function show(Sizes $sizes)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sizes  $sizes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sizes $sizes)
    {
        //
    }
}
