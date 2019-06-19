<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LastPhotosEng;
use App\TeamEng;

class HomeController
{
	public function index(){

		$LastPhotosEng = LastPhotosEng::orderBy('created_at','DESC')->limit(6)->get();
		$teamEng = TeamEng::all();
		return view('home',[
			'LastPhotosEng'	=>	$LastPhotosEng,
			'team_eng'	=>	$teamEng
		]);
	}
}
