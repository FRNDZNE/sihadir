<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dosen;
use App\Models\Role;


class DosenController extends Controller
{
    public function index()
    {
        $data = User::with('dosen')->whereHas('dosen')->get();
        // return $data;
        return view('admin.dosen.index',compact('data'));
    }

    public function create()
    {
        return view ('admin.dosen.create');
    }
    
    public function store(Request $request)
    {
        // Create table User
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        // Create table Dosen
        $dosen = new Dosen;
        $dosen->user_id = $user->id;
        $dosen->nip = $request->nip;
        $dosen->gender = $request->gender;
        $dosen->foto = "Foto Belum ada";
        $dosen->save();

        // Attach Role As Dosen
        $role = Role::where('name','dosen')->first();
        $user->addRole($role);
        // Return to index page
        return redirect()->route('admin.dosen.index');
    }

    public function edit($id)
    {
        $data = User::where('id',$id)->with('dosen')->first();
        return view('admin.dosen.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id',$id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        if (isset($request->password)) {
            $user->password = bcrypt($request->password);
        } else {
            unset($user->password);
        }
        $user->save();

        $dosen = Dosen::where('user_id',$id)->first();
        $dosen->nip = $request->nip;
        $dosen->gender = $request->gender;
        $dosen->foto = 'Udah Berubah WKWKWWK';
        $dosen->save();
        return redirect()->route('admin.dosen.index');
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }
}
