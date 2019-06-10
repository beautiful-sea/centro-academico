<?php

namespace App\Http\Controllers\Admin;

use App\ParticipantsMinutes;
use Illuminate\Http\Request;

class ParticipantsMinutesController extends Controller
{
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
        $participant = new ParticipantsMinutes;

        $data = $request->all();

        $participant->fill($data['participant']);

        $participant->save();

        return $participant;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ParticipantsMinutes  $participantsMinutes
     * @return \Illuminate\Http\Response
     */
    public function show(ParticipantsMinutes $participantsMinutes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ParticipantsMinutes  $participantsMinutes
     * @return \Illuminate\Http\Response
     */
    public function edit(ParticipantsMinutes $participantsMinutes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ParticipantsMinutes  $participantsMinutes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParticipantsMinutes $participantsMinutes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ParticipantsMinutes  $participantsMinutes
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParticipantsMinutes $participantsMinutes)
    {
        //
    }
}
