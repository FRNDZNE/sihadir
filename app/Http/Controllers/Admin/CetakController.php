<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class CetakController extends Controller
{
    public function testCetak()
    {
        $pdf = PDF::loadView('admin.cetak.test')->setPaper('a4','landscape');
        return $pdf->stream();
    }
}
