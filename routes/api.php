<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::prefix('server')->group(function () {
    Route::get('date', function () {
        return [
            'data' => [
                'server' => [
                    'date' => now()->toDateString()
                ]
            ]
        ];
    })->name('server.date');

    Route::get('motd', function () {
        Artisan::call('inspire');

        return [
            'data' => [
                'server' => [
                    'motd' => Artisan::output()
                ]
            ]
        ];
    })->name('server.motd');
});
