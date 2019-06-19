<?php

namespace App\Http\Controllers\Admin;

use App\TeamEng;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;

class TeamEngController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamEng = TeamEng::all();

        return view('admin.team_eng.index',[
            'team_eng'  =>  $teamEng
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teamEng = new TeamEng;
        return view('admin.team_eng.create',[
            'team_eng'  =>  $teamEng
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
        $teamEng = new TeamEng;

        $teamEng->fill($request->all());


        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();

            $teamEng->extension_img = $extension;
        }

        $teamEng->save();

        if ($request->hasFile('photo')) {
            $request->file('photo')->move(base_path('/public/files/team_eng'), sprintf('%s.%s', $teamEng->id, $extension));
        }


        return redirect()->route('team_eng.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\teamEng  $teamEng
     * @return \Illuminate\Http\Response
     */
    public function show(TeamEng $teamEng)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\teamEng  $teamEng
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamEng $teamEng)
    {
        return view('admin.team_eng.edit',[
            'team_eng'  =>  $teamEng
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\teamEng  $teamEng
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamEng $teamEng)
    {
        $teamEng->fill($request->all());


        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();

            $teamEng->extension_img = $extension;
        }

        $teamEng->save();

        if ($request->hasFile('photo')) {
            $request->file('photo')->move(base_path('/public/files/team_eng'), sprintf('%s.%s', $teamEng->id, $extension));
        }

        return redirect()->route('team_eng.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\teamEng  $teamEng
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamEng $teamEng)
    {
        $teamEng->delete();

        return redirect()->route('team_eng.index');
        
    }
}
