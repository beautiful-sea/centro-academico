<?php

namespace App\Http\Controllers\Admin;

use App\Minutes;
use App\ParticipantsMinutes;
use App\ScheduleMinutes;
use Illuminate\Http\Request;

class MinutesController extends Controller
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
        $minutes = Minutes::all();
        return view('admin.minutes.index',
            ['minutes' =>  $minutes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $participants = ParticipantsMinutes::all();
        $schedules = ScheduleMinutes::all();
        
        return view('admin.minutes.create',
           [
            'participants' =>  $participants,
            'schedules' =>  $schedules,
            'minute'    =>  (new Minutes)
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
        $data = $request->all();
        $minute = new Minutes;
        $minute->fill($data);

        $minute->save();

        foreach ($data['participants'] as $value) {
            $participant = ParticipantsMinutes::find($value);
            $minute->participants()->save($participant);
        }

        foreach ($data['schedules'] as $value) {
            $schedule = ScheduleMinutes::find($value);
            $minute->schedules()->save($schedule);
        }

        if ($request->hasFile('ata')) {
            $request->file('ata')->move(base_path('/public/files/atas'), sprintf('%s.%s', $minute->id, 'pdf'));
        }


        return redirect()->route('minutes.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Minutes  $minutes
     * @return \Illuminate\Http\Response
     */
    public function edit(Minutes $minute)
    {
        $participants = ParticipantsMinutes::all();
        $schedules = ScheduleMinutes::all();

        return view('admin.minutes.edit',
            ['participants' =>  $participants,
            'schedules' =>  $schedules,
            'minute' =>  $minute]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Minutes  $minutes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Minutes $minutes,$id)
    {   
        $data   = $request->all();
        $minute = Minutes::find($id);
        $minute->fill($data);

        $minute->save();

        if(isset($data['participants'])){
            $minute->participants()->sync($data['participants']);
        }
        
        if(isset($data['schedules'])){
           foreach ($data['schedules'] as $value) {
                $minute->schedules()->sync($data['schedules']);
            } 
        }
        

        if ($request->hasFile('ata')) {
            $request->file('ata')->move(base_path('/public/files/atas'), sprintf('%s.%s', $minute->id, 'pdf'));
        }


        return redirect()->route('minutes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Minutes  $minutes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Minutes $minutes,$id)
    {
        $minute = Minutes::find($id);

        $minute->delete();

        return redirect()->route('minutes.index');
    }
}
