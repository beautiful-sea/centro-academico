<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LastPhotosEng;

class HomeController
{
	public function index(){

		$LastPhotosEng = LastPhotosEng::orderBy('created_at','DESC')->limit(6)->get();

		return view('home',[
			'LastPhotosEng'	=>	$LastPhotosEng
		]);
	}
}
