<?php
    Route::middleware(['auth','role:admin'])->prefix('admin')->group(function(){
        // Show Dashboard
        Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'admin'])->name('admin.dashboard');

        // Route CRUD DOSEN
        Route::prefix('dosen')->group(function(){
            Route::get('/',[App\Http\Controllers\Admin\DosenController::class,'index'])->name('admin.dosen.index');
            Route::get('/create',[App\Http\Controllers\Admin\DosenController::class,'create'])->name('admin.dosen.create');
            Route::post('/store',[App\Http\Controllers\Admin\DosenController::class,'store'])->name('admin.dosen.store');
            Route::get('/edit/{id}',[App\Http\Controllers\Admin\DosenController::class,'edit'])->name('admin.dosen.edit');
            Route::post('/update/{id}',[App\Http\Controllers\Admin\DosenController::class,'update'])->name('admin.dosen.update');
            Route::post('/delete/{id}',[App\Http\Controllers\Admin\DosenController::class,'delete'])->name('admin.dosen.delete');
        });

        // Route CRUD MAHASISWA
        Route::prefix('mahasiswa')->group(function(){
            Route::get('/',[App\Http\Controllers\Admin\MahasiswaController::class,'index'])->name('admin.mahasiswa.index');
            Route::get('/create',[App\Http\Controllers\Admin\MahasiswaController::class,'create'])->name('admin.mahasiswa.create');
            Route::post('/store',[App\Http\Controllers\Admin\MahasiswaController::class,'store'])->name('admin.mahasiswa.store');
            Route::get('/edit/{id}',[App\Http\Controllers\Admin\MahasiswaController::class,'edit'])->name('admin.mahasiswa.edit');
            Route::post('/update/{id}',[App\Http\Controllers\Admin\MahasiswaController::class,'update'])->name('admin.mahasiswa.update');
            Route::post('/delete/{id}',[App\Http\Controllers\Admin\MahasiswaController::class,'delete'])->name('admin.mahasiswa.delete');
        });

        // Route CRUD JAM
        Route::prefix('jam')->group(function(){
            Route::get('/',[App\Http\Controllers\Admin\JamController::class,'index'])->name('admin.jam.index');
            Route::post('/store',[App\Http\Controllers\Admin\JamController::class,'store'])->name('admin.jam.store');
            Route::post('/update',[App\Http\Controllers\Admin\JamController::class,'update'])->name('admin.jam.update');
            Route::post('/delete/{id}',[App\Http\Controllers\Admin\JamController::class,'delete'])->name('admin.jam.delete');
        });

        // Route CRUD RUANGAN
        Route::prefix('ruangan')->group(function(){
            Route::get('/',[App\Http\Controllers\Admin\RuanganController::class,'index'])->name('admin.ruangan.index');
            Route::post('/store',[App\Http\Controllers\Admin\RuanganController::class,'store'])->name('admin.ruangan.store');
            Route::post('/update',[App\Http\Controllers\Admin\RuanganController::class,'update'])->name('admin.ruangan.update');
            Route::post('/delete/{id}',[App\Http\Controllers\Admin\RuanganController::class,'delete'])->name('admin.ruangan.delete');
        });

        // Route CRUD KELAS
        Route::prefix('kelas')->group(function(){
            Route::get('/',[App\Http\Controllers\Admin\KelasController::class,'index'])->name('admin.kelas.index');
            Route::post('/store',[App\Http\Controllers\Admin\KelasController::class,'store'])->name('admin.kelas.store');
            Route::post('/update',[App\Http\Controllers\Admin\KelasController::class,'update'])->name('admin.kelas.update');
            Route::post('/delete/{id}',[App\Http\Controllers\Admin\KelasController::class,'delete'])->name('admin.kelas.delete');
        });

        // Route CRUD SEMESTER
        Route::prefix('semester')->group(function(){
            Route::get('/',[App\Http\Controllers\Admin\SemesterController::class,'index'])->name('admin.semester.index');
            Route::post('/store',[App\Http\Controllers\Admin\SemesterController::class,'store'])->name('admin.semester.store');
            Route::post('/update',[App\Http\Controllers\Admin\SemesterController::class,'update'])->name('admin.semester.update');
            Route::post('/delete/{id}',[App\Http\Controllers\Admin\SemesterController::class,'delete'])->name('admin.semester.delete');
        });

        // Route CRUD ANGKATAN
        Route::prefix('angkatan')->group(function(){
            Route::get('/',[App\Http\Controllers\Admin\AngkatanController::class,'index'])->name('admin.angkatan.index');
            Route::post('/store',[App\Http\Controllers\Admin\AngkatanController::class,'store'])->name('admin.angkatan.store');
            Route::post('/update',[App\Http\Controllers\Admin\AngkatanController::class,'update'])->name('admin.angkatan.update');
            Route::post('/delete/{id}',[App\Http\Controllers\Admin\AngkatanController::class,'delete'])->name('admin.angkatan.delete');
        });

        // Route CRUD DAY
        Route::prefix('day')->group(function(){
            Route::get('/',[App\Http\Controllers\Admin\DayController::class,'index'])->name('admin.day.index');
            Route::post('/store',[App\Http\Controllers\Admin\DayController::class,'store'])->name('admin.day.store');
            Route::post('/update',[App\Http\Controllers\Admin\DayController::class,'update'])->name('admin.day.update');
            Route::post('/delete/{id}',[App\Http\Controllers\Admin\DayController::class,'delete'])->name('admin.day.delete');
        });

        // Route CRUD Week
        Route::prefix('week')->group(function(){
            Route::get('/',[App\Http\Controllers\Admin\WeekController::class,'index'])->name('admin.week.index');
            Route::post('/store',[App\Http\Controllers\Admin\WeekController::class,'store'])->name('admin.week.store');
            Route::post('/update',[App\Http\Controllers\Admin\WeekController::class,'update'])->name('admin.week.update');
            Route::post('/delete/{id}',[App\Http\Controllers\Admin\WeekController::class,'destroy'])->name('admin.week.delete');
        });

        // Route Mata Kuliah
        Route::prefix('matkul')->group(function(){
            Route::get('/',[App\Http\Controllers\Admin\MatkulController::class,'index'])->name('admin.matkul.index');
            Route::get('/semester-{smt}',[App\Http\Controllers\Admin\MatkulController::class,'index_matkul'])->name('admin.matkul.smt.index');
            Route::post('/semester-{smt}/store',[App\Http\Controllers\Admin\MatkulController::class,'store'])->name('admin.matkul.smt.store');
            Route::post('/semester-{smt}/update',[App\Http\Controllers\Admin\MatkulController::class,'update'])->name('admin.matkul.smt.update');
            Route::post('/semester-{smt}/delete/{mk}',[App\Http\Controllers\Admin\MatkulController::class,'delete'])->name('admin.matkul.smt.delete');
        });

        // CRUD PENJADWALAN
        Route::prefix('penjadwalan')->group(function(){
            Route::get('/',[App\Http\Controllers\Admin\JadwalController::class,'index'])->name('admin.penjadwalan.index');
            Route::get('/{smt}',[App\Http\Controllers\Admin\JadwalController::class,'index_smt'])->name('admin.penjadwalan.semester.index');
            Route::get('/{smt}/{kls}',[App\Http\Controllers\Admin\JadwalController::class,'index_kls'])->name('admin.penjadwalan.kelas.index');
            // Penjadwalan based on Semester, Class and Day
            Route::get('/{smt}/{kls}/{day}',[App\Http\Controllers\Admin\JadwalController::class,'index_jadwal'])->name('admin.penjadwalan.hari.index');
            Route::post('/{smt}/{kls}/{day}/store',[App\Http\Controllers\Admin\JadwalController::class,'store_jadwal'])->name('admin.penjadwalan.hari.store');
            Route::post('/{smt}/{kls}/{day}/update',[App\Http\Controllers\Admin\JadwalController::class,'update_jadwal'])->name('admin.penjadwalan.hari.update');
            Route::post('/{smt}/{kls}/{day}/delete/{id}',[App\Http\Controllers\Admin\JadwalController::class,'delete_jadwal'])->name('admin.penjadwalan.hari.delete');
        });

        Route::prefix('cetak')->group(function(){
            Route::get('/',[App\Http\Controllers\Admin\CetakController::class,'index'])->name('admin.cetak.index');
            Route::get('/{semester}',[App\Http\Controllers\Admin\CetakController::class,'index_kelas'])->name('admin.cetak.index.kelas');
            Route::get('/{semester}/{kelas}',[App\Http\Controllers\Admin\CetakController::class,'index_minggu'])->name('admin.cetak.index.minggu');
        });

        Route::get('/test-cetak',[App\Http\Controllers\Admin\CetakController::class,'testCetak'])->name('cetak');
    });