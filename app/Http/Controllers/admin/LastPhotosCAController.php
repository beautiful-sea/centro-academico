<?php

namespace App\Http\Controllers\Admin;

use App\LastPhotosCA;
use Illuminate\Http\Request;

class LastPhotosCAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $last_photos_ca = LastPhotosCA::all();

        return view('admin.last_photos_ca.index',[
            'last_photos_ca'    =>  $last_photos_ca
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $last_photos_ca = new LastPhotosCA;

        return view('admin.last_photos_ca.create',[
            'last_photos_ca'    =>  $last_photos_ca
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $last_photos_ca = new LastPhotosCA;

        $last_photos_ca->fill($request->all());


        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();

            $last_photos_ca->extension_img = $extension;
        }

        $last_photos_ca->save();

        if ($request->hasFile('photo')) {
            $request->file('photo')->move(base_path('/public/files/last_photos_ca'), sprintf('%s.%s', $last_photos_ca->id, $extension));
        }

        return redirect()->route('last_photos_ca.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LastPhotosCA  $lastPhotosCA
     * @return \Illuminate\Http\Response
     */
    public function show(LastPhotosCA $lastPhotosCA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LastPhotosCA  $lastPhotosCA
     * @return \Illuminate\Http\Response
     */
    public function edit(LastPhotosCA $lastPhotosCA,$id)
    {
        $last_photos_ca = LastPhotosCA::find($id);

        return view('admin.last_photos_ca.edit',[
            'last_photos_ca'    =>  $last_photos_ca
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LastPhotosCA  $lastPhotosCA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LastPhotosCA $lastPhotosCA,$id)
    {
        $last_photos_ca = LastPhotosCA::find($id);

        $last_photos_ca->fill($request->all());


        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();

            $last_photos_ca->extension_img = $extension;
        }

        $last_photos_ca->save();

        if ($request->hasFile('photo')) {
            $request->file('photo')->move(base_path('/public/files/last_photos_ca'), sprintf('%s.%s', $last_photos_ca->id, $extension));
        }

        return redirect()->route('last_photos_ca.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LastPhotosCA  $lastPhotosCA
     * @return \Illuminate\Http\Response
     */
    public function destroy(LastPhotosCA $lastPhotosCA,$id)
    {

        $lastPhotosCA = LastPhotosCA::find($id);
        $lastPhotosCA->delete();

        return redirect()->route('last_photos_ca.index');

    }
}
