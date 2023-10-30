<?php 
    Route::middleware(['auth','role:admin'])->prefix('admin')->group(function(){
        // Show Dashboard
        Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'admin'])->name('admin.dashboard');

        // Route CRUD DOSEN
        Route::get('/dosen',[App\Http\Controllers\Admin\DosenController::class,'index'])->name('admin.dosen.index');
        Route::get('/dosen/create',[App\Http\Controllers\Admin\DosenController::class,'create'])->name('admin.dosen.create');
        Route::post('/dosen/store',[App\Http\Controllers\Admin\DosenController::class,'store'])->name('admin.dosen.store');
        Route::get('/dosen/edit/{id}',[App\Http\Controllers\Admin\DosenController::class,'edit'])->name('admin.dosen.edit');
        Route::post('/dosen/update/{id}',[App\Http\Controllers\Admin\DosenController::class,'update'])->name('admin.dosen.update');
        Route::post('/dosen/delete/{id}',[App\Http\Controllers\Admin\DosenController::class,'delete'])->name('admin.dosen.delete');

        // Route CRUD MAHASISWA
        
    });
