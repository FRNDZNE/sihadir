<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Semester;

class SemesterController extends Controller
{
    public function index()
    {
        $semester = Semester::all();
        return view('admin.data.semester', compact('semester'));

    }
    public function store(Request $request)
    {
        Semester::create([
            'name' => $request->name,
        ]);
        return redirect()->back()->with('success','Berhasil Menambah Data');
    }
    public function update(Request $request){
        $data = Semester::find( $request->id );
        $data->name = $request->name;
        $data->save();
        return redirect()->back()->with('success','Berhasil Mengubah Data');
    }
    
    public function delete($id)
    {
        Semester::find($id)->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Data');
    }
}