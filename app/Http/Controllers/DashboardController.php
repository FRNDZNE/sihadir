<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Jadwal;
use App\Models\Semester;
use App\Models\Kelas;
use App\Models\Day;
use Auth;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        return view('admin.dashboard');
    }
    public function dosen()
    {
        $data = Jadwal::where('dosen_id',Auth::user()->id)->with([
            'kelas','ruang','day','jam','dosen','matkul','semester'
        ])->get();
        return view('dosen.dashboard',compact('data'));
    }
    public function mahasiswa()
    {
        return view('mahasiswa.dashboard');
    }
}
