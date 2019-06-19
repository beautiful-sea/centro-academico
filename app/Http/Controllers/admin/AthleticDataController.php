<?php

namespace App\Http\Controllers\Admin;

use App\AthleticData;
use Illuminate\Http\Request;

class AthleticDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(athleticData::first()){
            $athletic_data = athleticData::first();
        }else{
            $athletic_data = new athleticData;
        }

        return view('admin.athletic_data.index',[
            'athletic_data' =>  $athletic_data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $athleticData = new AthleticData;

        $athleticData->fill($request->all());

        $athleticData->save();

        return redirect()->route('athletic_data.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AthleticData  $athleticData
     * @return \Illuminate\Http\Response
     */
    public function show(AthleticData $athleticData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AthleticData  $athleticData
     * @return \Illuminate\Http\Response
     */
    public function edit(AthleticData $athleticData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AthleticData  $athleticData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AthleticData $athleticData,$id)
    {
        $athleticData = AthleticData::find($id);

        $athleticData->fill($request->all());

        $athleticData->save();

        return redirect()->route('athletic_data.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AthleticData  $athleticData
     * @return \Illuminate\Http\Response
     */
    public function destroy(AthleticData $athleticData)
    {
        //
    }
}
