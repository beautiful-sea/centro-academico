<?php

namespace App\Http\Controllers\Admin;

use App\AthleticTeams;
use Illuminate\Http\Request;

class AthleticTeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $athleticTeams = AthleticTeams::all();

        return view('admin.athletic_teams.index',[
            'athletic_teams'    =>  $athleticTeams
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $athleticTeams = new AthleticTeams;
        return view('admin.athletic_teams.create',[
            'athletic_teams'  =>  $athleticTeams
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
        $athleticTeams = new AthleticTeams;

        $athleticTeams->fill($request->all());


        $athleticTeams->save();


        return redirect()->route('athletic_teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AthleticTeams  $athleticTeams
     * @return \Illuminate\Http\Response
     */
    public function show(AthleticTeams $athleticTeams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AthleticTeams  $athleticTeams
     * @return \Illuminate\Http\Response
     */
    public function edit(AthleticTeams $athleticTeams,$id)
    {

        
        return view('admin.athletic_teams.edit',[
            'athletic_teams'  =>  $athleticTeams->find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AthleticTeams  $athleticTeams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AthleticTeams $athleticTeams,$id)
    {
        $team = AthleticTeams::find($id);

        $team->fill($request->all());

        $team->save();

        return redirect()->route('athletic_teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AthleticTeams  $athleticTeams
     * @return \Illuminate\Http\Response
     */
    public function destroy(AthleticTeams $athleticTeams,$id)
    {   
        $athleticTeams->find($id)->delete();

        return redirect()->route('athletic_teams.index');
    }
}
