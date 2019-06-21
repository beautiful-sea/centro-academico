<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LastPhotosCA;
use App\HistoryCA;

class HomeCAController
{
    public function index(){

		$last_photos_ca = LastPhotosCA::orderBy('created_at','DESC')->limit(6)->get();
		$history_ca = HistoryCA::all();
    	return view('ca.home',[
    		'last_photos_ca'	=>	$last_photos_ca,
    		'history_ca'	=>	$history_ca
    	]);
    }
}
