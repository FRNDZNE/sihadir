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
        return view('admin.dosen.index');
    }

    public function create()
    {
        return view ('admin.dosen.create');
    }
    
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $dosen = new Dosen;
        $dosen->user_id = $user->id;
        $dosen->nip = $request->nip;
        $dosen->gender = $request->gender;
        $dosen->foto = "Foto Belum ada";
        $dosen->save();

        $role = Role::where('name','dosen')->first();
        $user->addRole($role);
        return redirect()->route('admin.dosen.index');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
