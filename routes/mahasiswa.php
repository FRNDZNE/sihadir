<?php
Route::middleware(['auth','role:mahasiswa'])->prefix('mahasiswa')->group(function(){
        // Show Dashboard
        Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'mahasiswa'])->name('mahasiswa.dashboard');
    });
