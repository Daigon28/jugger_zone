<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Models\Event;

Route::get('/', HomeController::class);

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/{event}/edit', [EventController::class, 'edit']);
Route::post('/events/store', [EventController::class, 'store']);
Route::put('/events/update/{event}', [EventController::class, 'update']);
Route::delete('/events/delete/{event}', [EventController::class, 'destroy']);

Route::get('/events/{event}', [EventController::class, 'show']);



// get (click enlace)
// post (desde formulario para mandar info)
// post-put (actualizar)
// post-patch (actualizar)
// post-delete (eliminar)
// popo (editado por baxter)


Route::get('/prueba', function(){
    
    /*
        crear registro

        $event = new Event();

        $event->title = "titulo baxter " ;
        $event->description = "descripcion baxter" ;

        $event->save();
    */
        
    /*
        traer registros
        
        // $event = Event::all(); //todos
        $event = Event::where('id', '>=', "2")->orderBy('id','desc')->get(); 
    */
        

    /*
        actualizar registro
        
        $event = Event::where('title',"titulo de prueba")->first();

        $event->title = "titulo de prueba nuevo";
        $event->save();
    */
    
        
    /*
        eliminar registro
        $event = Event::find(1);
        $event->delete();
    */
        

    // return $event;
});