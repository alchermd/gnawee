<?php

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
});
