<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AthleticData;
use App\AthleticTeams;
use App\LastPhotosAthletic;
use App\NewsAthletic;


class HomeAthleticController 
{
    public function index(){

    	$athletic_data = AthleticData::first();
    	$athletic_teams = AthleticTeams::all();
		$last_photos_athletic = LastPhotosAthletic::orderBy('created_at','DESC')->limit(6)->get();
		$news_athletic = NewsAthletic::orderBy('created_at','DESC')->limit(6)->get();
    	return view('atletica.home',[
    		'athletic_data'	=>	$athletic_data,
    		'athletic_teams'	=>	$athletic_teams,
    		'last_photos_athletic'	=>	$last_photos_athletic,
    		'news_athletic'	=>	$news_athletic
    	]);
    }

}
