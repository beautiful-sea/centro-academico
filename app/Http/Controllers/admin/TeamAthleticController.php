<?php

namespace App\Http\Controllers\Admin;

use App\TeamAthletic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamAthleticController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TeamAthletic = TeamAthletic::all();

        return view('admin.team_athletic.index',[
            'team_athletic'  =>  $TeamAthletic
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team_athletic = new TeamAthletic;
        return view('admin.team_athletic.create',[
            'team_athletic'  =>  $team_athletic
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
        $TeamAthletic = new TeamAthletic;

        $TeamAthletic->fill($request->all());


        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();

            $TeamAthletic->extension_img = $extension;
        }

        $TeamAthletic->save();

        if ($request->hasFile('photo')) {
            $request->file('photo')->move(base_path('/public/files/team_athletic'), sprintf('%s.%s', $TeamAthletic->id, $extension));
        }


        return redirect()->route('team_athletic.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeamAthletic  $teamAthletic
     * @return \Illuminate\Http\Response
     */
    public function show(TeamAthletic $teamAthletic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeamAthletic  $teamAthletic
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamAthletic $teamAthletic)
    {
        return view('admin.team_athletic.edit',[
            'team_athletic'  =>  $teamAthletic
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeamAthletic  $teamAthletic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamAthletic $TeamAthletic)
    {
        $TeamAthletic->fill($request->all());


        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();

            $TeamAthletic->extension_img = $extension;
        }

        $TeamAthletic->save();

        if ($request->hasFile('photo')) {
            $request->file('photo')->move(base_path('/public/files/team_athletic'), sprintf('%s.%s', $TeamAthletic->id, $extension));
        }

        return redirect()->route('team_athletic.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeamAthletic  $teamAthletic
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamAthletic $teamAthletic)
    {
        $teamAthletic->delete();

        return redirect()->route('team_athletic.index');
    }
}
