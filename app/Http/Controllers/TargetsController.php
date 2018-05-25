<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Targets;

class TargetsController extends Controller
{
    public function view_target(){
    	$targets = Targets::all();


    	return view('home', compact('targets'));
    }
}
