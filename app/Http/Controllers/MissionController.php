<?php

namespace App\Http\Controllers;

// use DB;
// use Illuminate\Http\Request;
use App\Targets;
use App\Missions;

class MissionController extends Controller
{
    // public function mission_details()
    // {
    // 	$mission=DB::table('mission')->first();
    // 	dd($mission);
    // }
    public function index(){
    	$targets = Targets::all();
    	$missions = Missions::all();


    	return view('home', compact('targets', 'missions'));
    }
}




