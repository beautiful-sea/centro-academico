<?php

namespace App\Http\Controllers\Admin;

use App\HistoryCA;
use Illuminate\Http\Request;

class HistoryCAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history_ca = new HistoryCA;
        return view('admin.history_ca.index',[
            'history_ca'    =>  $history_ca
        ]);
    }


    public function store(Request $request)
    {
        $history_ca = HistoryCA::first();
        $history_ca->fill($request->all());

        $history_ca->save();

        return redirect()->route('ca.history_ca');
    }
}
