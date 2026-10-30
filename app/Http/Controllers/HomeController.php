<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $events = Event::orderBy('date','asc')->limit('5')->get();

        foreach ($events as $event) {
            $event->date = strtoupper(
                str_replace(".","", 
                    Carbon::parse($event->date)
                        ->locale('es')
                        ->translatedFormat('d M')
                )
            );
            $event->start_time = Carbon::parse($event->start_time)
                ->translatedFormat('H:i A');
        }

        return view('home',[
            'events' => $events
        ]);
        // return view('home');
    }
}
