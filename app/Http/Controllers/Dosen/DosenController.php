<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\User;
use App\Models\Dosen;
use Auth;

class DosenController extends Controller
{
    public function profil()
    {
        $data = User::with('dosen')->where('id', Auth::user()->id)->first();
        // return $data;
        return view('dosen.profil',compact('data'));
    }

    public function update(Request $request)
    {
        $user = User::where('id',Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        if (isset($request->password)) {
            $user->password = bcrypt($request->password);
        } else {
            unset($user->password);
        }
        $user->save();

        $dosen = Dosen::where('user_id',$user->id)->first();
        $dosen->nip = $request->nip;
        $dosen->gender = $request->gender;
        $dosen->foto = 'Udah Berubah WKWKWWK';
        $dosen->save();

        return redirect()->back()->with('success','Berhasil Mengubah Data');
    }

    public function jadwal($jadwal)
    {
        $jadwal = Jadwal::where('id',$jadwal)->with([
            'kelas', 'ruang', 'day', 'jam', 'matkul', 'semester'
        ])->first();
        return view('dosen.jadwal',compact('jadwal'));
    }
}
