<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AthleticData;
use App\AthleticTeams;


class HomeAthleticController 
{
    public function index(){

    	$athletic_data = AthleticData::first();
    	$athletic_teams = AthleticTeams::all();

    	return view('atletica.home',[
    		'athletic_data'	=>	$athletic_data,
    		'athletic_teams'	=>	$athletic_teams
    		
    	]);
    }
}
