<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;


Route::get('/', HomeController::class);

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{event}', [EventController::class, 'event']);



// get (click enlace)
// post (desde formulario para mandar info)
// post-put (actualizar)
// post-patch (actualizar)
// post-delete (eliminar)
// popo (editado por baxter)
