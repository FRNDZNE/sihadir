<?php 
Route::middleware(['auth','role:dosen'])->prefix('dosen')->group(function(){
        // Show Dashboard
        Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'dosen'])->name('dosen.dashboard');
        Route::get('/profil',[App\Http\Controllers\Dosen\DosenController::class,'profil'])->name('dosen.profil');
        Route::post('/update',[App\Http\Controllers\Dosen\DosenController::class,'update'])->name('dosen.update');

        // Jadwal & absensi
        Route::get('/jadwal/{jadwal}',[App\Http\Controllers\Dosen\DosenController::class,'jadwal'])->name('dosen.jadwal');
    });
