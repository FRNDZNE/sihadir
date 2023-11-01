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

        // Route CRUD JAM
        Route::get('/jam',[App\Http\Controllers\Admin\JamController::class,'index'])->name('admin.jam.index');
        Route::post('/jam/store',[App\Http\Controllers\Admin\JamController::class,'store'])->name('admin.jam.store');
        Route::post('/jam/update',[App\Http\Controllers\Admin\JamController::class,'update'])->name('admin.jam.update');
        Route::post('/jam/delete/{id}',[App\Http\Controllers\Admin\JamController::class,'delete'])->name('admin.jam.delete');

        // Route CRUD RUANGAN
        Route::get('/ruangan',[App\Http\Controllers\Admin\RuanganController::class,'index'])->name('admin.ruangan.index');
        Route::post('/ruangan/store',[App\Http\Controllers\Admin\RuanganController::class,'store'])->name('admin.ruangan.store');
        Route::post('/ruangan/update',[App\Http\Controllers\Admin\RuanganController::class,'update'])->name('admin.ruangan.update');
        Route::post('/ruangan/delete/{id}',[App\Http\Controllers\Admin\RuanganController::class,'delete'])->name('admin.ruangan.delete');

        // Route CRUD KELAS
        Route::get('/kelas',[App\Http\Controllers\Admin\KelasController::class,'index'])->name('admin.kelas.index');
        Route::post('/kelas/store',[App\Http\Controllers\Admin\KelasController::class,'store'])->name('admin.kelas.store');
        Route::post('/kelas/update',[App\Http\Controllers\Admin\KelasController::class,'update'])->name('admin.kelas.update');
        Route::post('/kelas/delete/{id}',[App\Http\Controllers\Admin\KelasController::class,'delete'])->name('admin.kelas.delete');

        // Route CRUD SEMESTER
        Route::get('/semester',[App\Http\Controllers\Admin\SemesterController::class,'index'])->name('admin.semester.index');
        Route::post('/semester/store',[App\Http\Controllers\Admin\SemesterController::class,'store'])->name('admin.semester.store');
        Route::post('/semester/update',[App\Http\Controllers\Admin\SemesterController::class,'update'])->name('admin.semester.update');
        Route::post('/semester/delete/{id}',[App\Http\Controllers\Admin\SemesterController::class,'delete'])->name('admin.semester.delete');

        // Route CRUD ANGKATAN
        Route::get('/angkatan',[App\Http\Controllers\Admin\AngkatanController::class,'index'])->name('admin.angkatan.index');
        Route::post('/angkatan/store',[App\Http\Controllers\Admin\AngkatanController::class,'store'])->name('admin.angkatan.store');
        Route::post('/angkatan/update',[App\Http\Controllers\Admin\AngkatanController::class,'update'])->name('admin.angkatan.update');
        Route::post('/angkatan/delete/{id}',[App\Http\Controllers\Admin\AngkatanController::class,'delete'])->name('admin.angkatan.delete');

        // Route Mata Kuliah
        Route::get('/matakuliah',[App\Http\Controllers\Admin\MatkulController::class,'index'])->name('admin.matkul.index');
        Route::get('/matakuliah/semester/{smt}',[App\Http\Controllers\Admin\MatkulController::class,'index_matkul'])->name('admin.matkul.smt.index');
        Route::post('/matakuliah/semester/{smt}/store',[App\Http\Controllers\Admin\MatkulController::class,'store'])->name('admin.matkul.smt.store');
        Route::post('/matakuliah/semester/{smt}/update',[App\Http\Controllers\Admin\MatkulController::class,'update'])->name('admin.matkul.smt.update');
        Route::post('/matakuliah/semester/{smt}/delete/{mk}',[App\Http\Controllers\Admin\MatkulController::class,'delete'])->name('admin.matkul.smt.delete');
    });