<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){ // listar eventos
        $events = Event::orderBy('id','desc')->get();

        // return $events;
        return view('events.index', compact('events'));
    }
    
    public function create(){ // crear evento
        return view('events.create');
    }
    public function store(Request $request){ // guardar evento
        $event = new Event();

        $event->title       = $request->title ;
        $event->slug       = $request->slug ;
        $event->description = $request->description ;

        // return $event;
        $event->save();

        return redirect()->route('event.index');
    }

    public function edit(Event $event){ // editar evento
        // $event = Event::find($event);
        return view('events.create',compact("event"));
    }
    public function update(Event $event, Request $request){ // update info7 evento
        // $event = Event::find ($event);

        $event->title       = $request->title;
        $event->slug       = $request->slug;
        $event->description = $request->description;

        $event->save();
        
        return redirect()->route('event.index');
    }
    

    public function destroy(Event $event){ // update info7 evento
        // $event = Event::find($event);
        $event->delete();
        return redirect()->route('event.index');
    }


    public function show(Event $event){ // mostrar evento
        // $event = Event::find($event);
        return view('events.event',[
            'event' => $event
        ]);
        
    }
}
