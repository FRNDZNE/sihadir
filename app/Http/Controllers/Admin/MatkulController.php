<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matkul;
use App\Models\Semester;

class MatkulController extends Controller
{
    public function index()
    {
        $semester = Semester::all();
        return view('admin.matkul.semester',compact('semester'));
    }

    public function index_matkul($smt)
    {
        $semester = Semester::where('id',$smt)->with('matkul')->first();
        // return $semester;
        return view('admin.matkul.matkul',compact('semester'));
    }

    public function store(Request $request, $id)
    {
        $semester = Semester::where('id',$id)->first();
        $matkul = new Matkul;
        $matkul->semester_id = $semester->id;
        $matkul->name = $request->name;
        $matkul->save();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $semester = Semester::where('id',$id)->first();
        $matkul = Matkul::where('semester_id',$id)->first();
        $matkul->name = $request->name;
        $matkul->save();
        return redirect()->back();
    }

    public function delete($id,$mk)
    {
        Matkul::where('id',$mk)->delete();
        return redirect()->back();
    }
}
