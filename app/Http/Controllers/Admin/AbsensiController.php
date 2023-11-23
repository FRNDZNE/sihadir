<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Semester;
use App\Models\Kelas;
use App\Models\Absensi;
use App\Models\Jadwal;
use App\Models\Week;
use App\Models\User;

class AbsensiController extends Controller
{
    public function index()
    {
        // return 'halaman absensi';
        $semester = Semester::all();
        return view('admin.absensi.index',compact('semester'));
    }

    public function indexKls($smt)
    {
        $data['semester'] = Semester::where('id',$smt)->first();
        $data['kelas'] = Kelas::all();
        return view('admin.absensi.kelas',compact('data'));
    }

    public function indexJdw($smt,$kls)
    {
        $data = Jadwal::where([
            ['semester_id',$smt],
            ['kelas_id',$kls],
        ])->get();
        return view('admin.absensi.jadwal',compact('data'));
    }

    public function indexWeek($smt,$kls,$jdw)
    {
        $data['jadwal'] = Jadwal::where('id',$jdw)->with([
            'kelas', 'ruang', 'day', 'jam', 'matkul', 'semester',
        ])->first();
        $data['minggu'] = Week::all();
        return view('admin.absensi.minggu',compact('data'));
    }

    public function indexAbsensi($smt,$kls,$jdw, $week)
    {
        $data['jadwal'] = Jadwal::where('id',$jdw)->with('jam')->first();
        $data['minggu'] = Week::where('id',$week)->first();
        $data['mahasiswa'] = Mahasiswa::with(['user.absensi' => function($q) use($jdw, $week) {
            $q->where('jadwal_id',$jdw);
            $q->where('week_id',$week);
        }])
        ->where([
            ['kelas_id', $kls],
            ['semester_id',$smt],
        ])
        ->get();

        return view('admin.absensi.absen',compact('data'));
    }

}
