<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $events = Event::orderBy('id','desc')->limit('5')->get();
        // foreach ($events as $event) {
        //     dd($event);
        // }
        
        //     dd($events);
        // exit;
        return view('home',[
            'events' => $events
        ]);
        // return view('home');
    }
}
