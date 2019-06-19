<?php

namespace App\Http\Controllers\Admin;

use App\LastPhotosEng;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;

class LastPhotosEngController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $last_photos_eng = LastPhotosEng::all();

        // dd($last_photos_eng);
        return view('admin.last_photos_eng.index',[
            'last_photos_eng'   =>  $last_photos_eng
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $last_photos_eng = new LastPhotosEng;

        return view('admin.last_photos_eng.create',[
            'last_photos_eng'   =>  $last_photos_eng
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
        $lastPhotosEng = new LastPhotosEng;

        $lastPhotosEng->fill($request->all());


        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();

            $lastPhotosEng->extension_img = $extension;
        }

        $lastPhotosEng->save();

        if ($request->hasFile('photo')) {
            $request->file('photo')->move(base_path('/public/files/last_photos_eng'), sprintf('%s.%s', $lastPhotosEng->id, $extension));
        }


        return redirect()->route('last_photos_eng.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LastPhotosEng  $lastPhotosEng
     * @return \Illuminate\Http\Response
     */
    public function show(LastPhotosEng $lastPhotosEng)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LastPhotosEng  $lastPhotosEng
     * @return \Illuminate\Http\Response
     */
    public function edit(LastPhotosEng $lastPhotosEng)
    {

        return view('admin.last_photos_eng.edit',[
            'last_photos_eng'   =>  $lastPhotosEng
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LastPhotosEng  $lastPhotosEng
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LastPhotosEng $lastPhotosEng)
    {
        $lastPhotosEng->fill($request->all());


        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();

            $lastPhotosEng->extension_img = $extension;
        }

        $lastPhotosEng->save();

        if ($request->hasFile('photo')) {
            $request->file('photo')->move(base_path('/public/files/last_photos_eng'), sprintf('%s.%s', $lastPhotosEng->id, $extension));
        }

        return redirect()->route('last_photos_eng.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LastPhotosEng  $lastPhotosEng
     * @return \Illuminate\Http\Response
     */
    public function destroy(LastPhotosEng $lastPhotosEng)
    {
        $lastPhotosEng->delete();
        
        return redirect()->route('last_photos_eng.index');
    }
}
