<?php

namespace App\Http\Controllers\Admin;

use App\Colors;
use Illuminate\Http\Request;

class ColorsController extends Controller
{


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Colors  $colors
     * @return \Illuminate\Http\Response
     */
    public function edit(Colors $colors,$id)
    {
        $color = Colors::find($id);

        return view('admin.products.edit-color',[
            'color' => $color
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Colors  $colors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colors $colors,$id)
    {
        $color = $colors->find($id);

        $color->fill($request->all());

        $color->save();

        return redirect()->route('products.config')->with('flash.success', "Cor editada com sucesso.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Colors  $colors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colors $colors)
    {
        //
    }
}
