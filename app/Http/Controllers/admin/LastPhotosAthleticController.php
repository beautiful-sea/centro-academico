<?php

namespace App\Http\Controllers\Admin;

use App\LastPhotosAthletic;
use Illuminate\Http\Request;

class LastPhotosAthleticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $last_photos_athletic = LastPhotosAthletic::all();

        return view('admin.last_photos_athletic.index',[
            'last_photos_athletic'  =>  $last_photos_athletic
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $last_photos_athletic = new LastPhotosAthletic;
        
        return view('admin.last_photos_athletic.create',[
            'last_photos_athletic'  =>  $last_photos_athletic
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
        $last_photos_athletic = new LastPhotosAthletic;

        $last_photos_athletic->fill($request->all());


        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();

            $last_photos_athletic->extension_img = $extension;
        }

        $last_photos_athletic->save();

        if ($request->hasFile('photo')) {
            $request->file('photo')->move(base_path('/public/files/last_photos_athletic'), sprintf('%s.%s', $last_photos_athletic->id, $extension));
        }

        return redirect()->route('last_photos_athletic.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LastPhotosAthletic  $lastPhotosAthletic
     * @return \Illuminate\Http\Response
     */
    public function show(LastPhotosAthletic $lastPhotosAthletic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LastPhotosAthletic  $lastPhotosAthletic
     * @return \Illuminate\Http\Response
     */
    public function edit(LastPhotosAthletic $lastPhotosAthletic)
    {
        
        return view('admin.last_photos_athletic.edit',[
            'last_photos_athletic'  =>  $lastPhotosAthletic
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LastPhotosAthletic  $lastPhotosAthletic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LastPhotosAthletic $lastPhotosAthletic)
    {
        $last_photos_athletic = $lastPhotosAthletic;

        $last_photos_athletic->fill($request->all());


        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();

            $last_photos_athletic->extension_img = $extension;
        }

        $last_photos_athletic->save();

        if ($request->hasFile('photo')) {
            $request->file('photo')->move(base_path('/public/files/last_photos_athletic'), sprintf('%s.%s', $last_photos_athletic->id, $extension));
        }

        return redirect()->route('last_photos_athletic.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LastPhotosAthletic  $lastPhotosAthletic
     * @return \Illuminate\Http\Response
     */
    public function destroy(LastPhotosAthletic $lastPhotosAthletic)
    {
        $lastPhotosAthletic->delete();
        
        return redirect()->route('last_photos_athletic.index');
    }
}
