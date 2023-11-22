<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Semester;

class AbsensiController extends Controller
{
    public function index()
    {
        // return 'halaman absensi';
        $semester = Semester::all();
        return view('admin.absensi.index',compact('semester'));
    }
}
