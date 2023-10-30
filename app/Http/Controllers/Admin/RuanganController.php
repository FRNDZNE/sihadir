<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ruang;

class RuanganController extends Controller
{
    public function index(){
        $data = Ruang::all();
        // return $data;

        return view('admin.data.ruang', compact('data'));
    }
    public function store(Request $request){

        $data = new Ruang;
        $data->name = $request->name;
        $data->save();

        return redirect()->back();
    }
    public function update(Request $request){
        
        // $data = Ruang::where('id',$request->id)->first();
        $data = Ruang::find($request->id);

        $data->update([
            'name' => $request->name,
        ]);
        return redirect()->back();
    }
    public function delete($id){
        
        Ruang::find($id)->delete();
        return redirect()->back();
    }
}