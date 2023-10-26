<?php 
Route::middleware(['auth','role:dosen'])->prefix('dosen')->group(function(){
        // Show Dashboard
        Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'dosen'])->name('dosen.dashboard');
    });
