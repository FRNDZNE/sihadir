<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Semester;
use App\Models\Kelas;
use App\Models\Week;
use PDF;

class CetakController extends Controller
{
    public function index()
    {
        $data = Semester::all();
        return view('admin.cetak.semester',compact('data'));
    }

    public function index_kelas($smt)
    {
        $data['semester'] = Semester::where('id',$smt)->first();
        $data['kelas'] = Kelas::all();
        return view('admin.cetak.kelas',compact('data'));
    }

    public function index_minggu($smt,$kls)
    {
        $data['semester'] = Semester::where('id',$smt)->first();
        $data['kelas'] = Kelas::all();
        $data['week'] = Week::all();
        return view('admin.cetak.minggu',compact('data'));
    }
}
