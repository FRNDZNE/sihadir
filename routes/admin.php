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
        Route::get('/mahasiswa',[App\Http\Controllers\Admin\MahasiswaController::class,'index'])->name('admin.mahasiswa.index');
        Route::get('/mahasiswa/create',[App\Http\Controllers\Admin\MahasiswaController::class,'create'])->name('admin.mahasiswa.create');
        Route::post('/mahasiswa/store',[App\Http\Controllers\Admin\MahasiswaController::class,'store'])->name('admin.mahasiswa.store');
        Route::get('/mahasiswa/edit/{id}',[App\Http\Controllers\Admin\MahasiswaController::class,'edit'])->name('admin.mahasiswa.edit');
        Route::post('/mahasiswa/update/{id}',[App\Http\Controllers\Admin\MahasiswaController::class,'update'])->name('admin.mahasiswa.update');
        Route::post('/mahasiswa/delete/{id}',[App\Http\Controllers\Admin\MahasiswaController::class,'delete'])->name('admin.mahasiswa.delete');
    });
