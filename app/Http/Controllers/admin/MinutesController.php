<?php

namespace App\Http\Controllers\Admin;

use App\Minutes;
use Illuminate\Http\Request;

class MinutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.minutes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.minutes.create');
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Minutes  $minutes
     * @return \Illuminate\Http\Response
     */
    public function edit(Minutes $minutes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Minutes  $minutes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Minutes $minutes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Minutes  $minutes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Minutes $minutes)
    {
        //
    }
}
