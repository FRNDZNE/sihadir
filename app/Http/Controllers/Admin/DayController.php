<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Day;

class DayController extends Controller
{
    public function index(){
        // cek data table day
        $day = Day::all();
        // return $data;
        return view ('admin.data.day',compact('day'));

    }
    public function store(Request $request){
        $data = new Day;
        $data->name = $request->name;
        $data->save();
        return redirect()->back();

    }
    public function update(Request $request){
        $data= Day::where('id',$request->id)->first();

        $data->update([
            'name'=>$request->name,
        ]);
        return redirect()->back();
    }
    public function delete($id){
        Day::find($id)->delete();
        return redirect()->back();
    }
}