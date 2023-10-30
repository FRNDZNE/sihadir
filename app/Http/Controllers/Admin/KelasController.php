<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller

{
    public function index()
    {
        $kelas = Kelas::all();
        return view('admin.data.kelas', compact('kelas'));

    }
    public function store(Request $request)
    {
        Kelas::create([
            'name' => $request->name,
        ]);
        return redirect()->back();
    }
    public function update(Request $request){
        $data = Kelas::find( $request->id );
        $data->name = $request->name;
        $data->save();
        return redirect()->back();
    }
    
    public function delete($id)
    {
        Kelas::find($id)->delete();
        return redirect()->back();
    }
       
}
