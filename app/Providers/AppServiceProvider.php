<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire; // Importante
use Illuminate\Support\Facades\Route; // Importante
use App\Models\Solicitud;
use App\Observers\SolicitudObserver;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
{
    // observer para mensajes
    Solicitud::observe(SolicitudObserver::class);

    // Código dinámico para detectar la carpeta
    $baseUrl = str_replace(['/index.php', '/public/index.php'], '', request()->getBaseUrl());

    // Agregamos ->name('custom...') para evitar el choque de nombres
    Livewire::setUpdateRoute(function ($handle) use ($baseUrl) {
        return Route::post($baseUrl . '/livewire/update', $handle)
            ->name('custom.livewire.update');
    });

    Livewire::setScriptRoute(function ($handle) use ($baseUrl) {
        return Route::get($baseUrl . '/livewire/livewire.js', $handle)
            ->name('custom.livewire.js');
    });

    // Tu config de tablas...
    config(['livewire-tables.inject_core_assets' => false]);
    if (app()->environment('local')) {
        config(['livewire-tables.base_url' => $baseUrl]);
    }
}
}
