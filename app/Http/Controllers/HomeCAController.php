<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCAController
{
    public function index(){
    	return view('ca.home');
    }
}
