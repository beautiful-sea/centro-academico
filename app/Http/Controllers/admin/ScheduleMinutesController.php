<?php

namespace App\Http\Controllers\Admin;

use App\ScheduleMinutes;
use Illuminate\Http\Request;

class ScheduleMinutesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $schedule = new ScheduleMinutes;

        $data = $request->all();
        
        $schedule->fill($data['schedule']);

        $schedule->save();

        return $schedule;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ScheduleMinutes  $scheduleMinutes
     * @return \Illuminate\Http\Response
     */
    public function show(ScheduleMinutes $scheduleMinutes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ScheduleMinutes  $scheduleMinutes
     * @return \Illuminate\Http\Response
     */
    public function edit(ScheduleMinutes $scheduleMinutes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ScheduleMinutes  $scheduleMinutes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScheduleMinutes $scheduleMinutes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ScheduleMinutes  $scheduleMinutes
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScheduleMinutes $scheduleMinutes)
    {
        //
    }
}
