<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitudController;

// MENU
Route::get('/', function () {
    return view('menu'); 
});



// Cursos
Route::get('solicitud', [SolicitudController::class, 'create'])
    // ->middleware(CheckCartItems::class)
    ->name('solicitudes.create');

// Solicitudes
Route::get('consulta', [SolicitudController::class, 'consultarSolicitudes'])
->name('solicitudes.publica');

// Route::post('solicitud', [SolicitudController::class, 'store'])
// ->name('solicitudes.store');


// VER LAS CONSTANCIAS CREADAS
/* Route::get('ver-consultas', function(){
    return view ('consulta.index');
})->name('consulta.index'); */




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Cambiamos '/dashboard' por '/interno/dashboard'
    Route::get('/interno/dashboard', function () {
        return view('dashboard');
    })->name('dashboard'); 
});
