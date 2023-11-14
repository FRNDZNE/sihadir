<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jam;

class JamController extends Controller
{
    public function index(){
        // cek data table jam
        $jam = Jam::all();
        // return $data;
        return view ('admin.data.jam',compact('jam'));

    }
    public function store(Request $request){
        $data = new Jam;
        $data->name = $request->name;
        $data->save();
        return redirect()->back()->with('success','Berhasil Menambah Data');

    }
    public function update(Request $request){
        // $data= Jam::find($request->id);
        $data= Jam::where('id',$request->id)->first();

        $data->update([
            'name'=>$request->name,
        ]);
        return redirect()->back()->with('success','Berhasil Mengubah Data');
    }
    public function delete($id){
        Jam::find($id)->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Data');
    }

}