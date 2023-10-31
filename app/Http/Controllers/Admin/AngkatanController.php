<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Angkatan;

class AngkatanController extends Controller
{
    public function index()
    {
        $angkatan = Angkatan::all();
        return view('admin.data.angkatan', compact('angkatan'));

    }
    public function store(Request $request)
    {
        Angkatan::create([
            'name' => $request->name,
        ]);
        return redirect()->back();
    }
    public function update(Request $request){
        $data = Angkatan::find( $request->id );
        $data->name = $request->name;
        $data->save();
        return redirect()->back();
    }

    public function delete($id)
    {
        Angkatan::find($id)->delete();
        return redirect()->back();
    }
}