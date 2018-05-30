<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactFormRequest;
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

    public function contact(ContactFormRequest $request){

        $request->send();

    }

    public function portfolio($project){
        return view('portfolio/' . $project);
    }
}
