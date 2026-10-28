<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\EventModels;
use App\Models\Speaker;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        try {
            if (!app()->runningInConsole()) {
                if (Schema::hasTable('events')) {
                    $events = EventModels::all();
                    view()->share('events', $events);
                }

                if (Schema::hasTable('speakers')) {
                    $speakers = Speaker::all();
                    view()->share('speakers', $speakers);
                }
            }
        } catch (\Throwable $e) {
            // Prevent boot crashes when database is temporarily stopped or unreachable
        }
    }
}