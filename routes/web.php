<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/agent/{tema?}', [PageController::class, 'agent'])
    ->name('agent.tema');

Route::prefix('dashboard')->group(function () {
    Route::get('/mahasiswa/{nrp}', [PageController::class, 'mahasiswa'])
        ->name('mahasiswa.nrp')
        ->where('nrp', '[0-9]{10}');

    Route::get('/hitung-ipk/{ip1}/{ip2}', [PageController::class, 'hitungIpk'])
        ->name('ipk.hitung')
        ->where([
            'ip1' => '[0-4](?:\.[0-9]{1,2})?',
            'ip2' => '[0-4](?:\.[0-9]{1,2})?',
        ]);
});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});