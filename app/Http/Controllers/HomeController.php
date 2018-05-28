<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twitter;
use Cache;

class HomeController extends Controller
{
    public function index(){

        // Grab latest tweets / cacahe for 30 minutes
        $tweets = Cache::remember('users',30, function () {
            return  Twitter::getUserTimeline(['count' => 10, 'format' => 'array']);
        });

        return view('welcome')->with('tweets', $tweets);
    }

    public function contact(Request $request){

        $data = [];

        $data['type'] = 'success';
        $data['message'] = 'dkgjdlkfjgh';

        return $data;

    }

    public function portfolio($project){
        return view('portfolio/' . $project);
    }
}
