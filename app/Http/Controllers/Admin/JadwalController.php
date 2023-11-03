<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Semester;
use App\Models\Kelas;
use App\Models\Day;
use App\Models\Jam;
use App\Models\Matkul;
use App\Models\Jadwal;
use App\Models\User;

class JadwalController extends Controller
{
    public function index()
    {
        $semester = Semester::all();
        return view('admin.jadwal.semester',compact('semester'));
    }

    public function index_kls()
    {

    }

    public function index_day()
    {

    }

    public function index_jadwal()
    {

    }
}
