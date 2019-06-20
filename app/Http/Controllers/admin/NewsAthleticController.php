<?php

namespace App\Http\Controllers\Admin;

use App\NewsAthletic;
use Illuminate\Http\Request;

class NewsAthleticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_athletic = NewsAthletic::all();

        return view('admin.news_athletic.index',[
            'news_athletic' =>  $news_athletic
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news_athletic = new NewsAthletic;

        return view('admin.news_athletic.create',[
            'news_athletic' =>  $news_athletic
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
        $news_athletic = new NewsAthletic;

        $news_athletic->fill($request->all());


        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();

            $news_athletic->extension_img = $extension;
        }

        $news_athletic->save();

        if ($request->hasFile('photo')) {
            $request->file('photo')->move(base_path('/public/files/news_athletic'), sprintf('%s.%s', $news_athletic->id, $extension));
        }

        return redirect()->route('news_athletic.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsAthletic  $newsAthletic
     * @return \Illuminate\Http\Response
     */
    public function show(NewsAthletic $newsAthletic,$id)
    {
        $last_news = NewsAthletic::orderBy('created_at','DESC')->limit(3)->get();

        return view('atletica.news',[
            'news_athletic' =>  $newsAthletic->find($id),
            'last_news'     =>  $last_news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsAthletic  $newsAthletic
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsAthletic $newsAthletic)
    {

        return view('admin.news_athletic.edit',[
            'news_athletic' =>  $newsAthletic
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsAthletic  $newsAthletic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsAthletic $newsAthletic)
    {
        $news_athletic = $newsAthletic;

        $news_athletic->fill($request->all());


        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();

            $news_athletic->extension_img = $extension;
        }

        $news_athletic->save();

        if ($request->hasFile('photo')) {
            $request->file('photo')->move(base_path('/public/files/news_athletic'), sprintf('%s.%s', $news_athletic->id, $extension));
        }

        return redirect()->route('news_athletic.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsAthletic  $newsAthletic
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsAthletic $newsAthletic)
    {
        $newsAthletic->delete();

        return redirect()->route('news_athletic.index');

    }
}
