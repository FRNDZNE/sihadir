<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = "kelas";
    protected $guarded = [];

    public function mahasiswa()
    {
        return $this->belongsToMany('App\Models\Mahasiswa');
    }

    public function jadwal()
    {
        return $this->hasMany('App\Models\Jadwal');
    }

}
