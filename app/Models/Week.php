<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function absensi()
    {
        return $this->hasMany('App\Models\Absensi');
    }
    
}
