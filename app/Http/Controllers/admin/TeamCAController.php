<?php

namespace App\Http\Controllers\Admin;

use App\TeamCA;
use Illuminate\Http\Request;

class TeamCAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamCA = TeamCA::all();

        return view('admin.team_ca.index',[
            'team_ca'  =>  $teamCA
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team_ca = new TeamCA;
        return view('admin.team_ca.create',[
            'team_ca'  =>  $team_ca
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
        $TeamCA = new TeamCA;

        $TeamCA->fill($request->all());


        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();

            $TeamCA->extension_img = $extension;
        }

        $TeamCA->save();

        if ($request->hasFile('photo')) {
            $request->file('photo')->move(base_path('/public/files/team_ca'), sprintf('%s.%s', $TeamCA->id, $extension));
        }


        return redirect()->route('team_ca.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeamCA  $teamCA
     * @return \Illuminate\Http\Response
     */
    public function show(TeamCA $teamCA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeamCA  $teamCA
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamCA $teamCA,$id)
    {
        $team_ca = TeamCA::find($id);
        return view('admin.team_ca.edit',[
            'team_ca'  =>  $team_ca
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeamCA  $teamCA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamCA $teamCA)
    {
        $TeamCA->fill($request->all());


        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();

            $TeamCA->extension_img = $extension;
        }

        $TeamCA->save();

        if ($request->hasFile('photo')) {
            $request->file('photo')->move(base_path('/public/files/team_ca'), sprintf('%s.%s', $TeamCA->id, $extension));
        }

        return redirect()->route('team_ca.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeamCA  $teamCA
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamCA $teamCA,$id)
    {
        $teamCA = TeamCA::find($id);
        $teamCA->delete();

        return redirect()->route('team_ca.index');
    }
}
