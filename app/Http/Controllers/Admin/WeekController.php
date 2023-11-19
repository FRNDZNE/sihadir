<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Week;
use Illuminate\Support\Facades\Validator;


class WeekController extends Controller
{
    public function index()
    {
        $week = Week::all();
        return view('admin.data.week',compact('week'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        // ]);
        $validate = Validator::make($request->all(), [
            'name' => 'required',
        ],[
            'required' => 'Masukan Data Terlebih Dahulu',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }
        $data = $request->all();
        Week::create($data);
        return redirect()->back()->with('success','Berhasil Menambah Data');
    }

    public function update(Request $request)
    {
        $data = Week::find($request->id);
        $data->update($request->all());
        return redirect()->back()->with('success','Berhasil Mengubah Data');
    }

    public function destroy($id)
    {
        Week::find($id)->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Data');
    }
}
