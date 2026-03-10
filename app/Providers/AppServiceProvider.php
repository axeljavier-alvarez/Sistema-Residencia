<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire; // Importante
use Illuminate\Support\Facades\Route; // Importante

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Si tienes observers, déjalos aquí arriba
        // \App\Models\Solicitud::observe(...);

        // --- ESTO ARREGLA EL ERROR 404 AL ESCRIBIR ---
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/ConstanciaResidencia/public/livewire/update', $handle);
        });

        Livewire::setScriptRoute(function ($handle) {
            return Route::get('/ConstanciaResidencia/public/livewire/livewire.js', $handle);
        });



        // Configuración para que los assets de tablas usen la ruta correcta
        config(['livewire-tables.inject_core_assets' => false]);
    // Si usas Rappasoft, esto fuerza a que no busque en la raíz
    if (app()->environment('local')) {
        config(['livewire-tables.base_url' => '/ConstanciaResidencia/public']);
    }

    }
}
