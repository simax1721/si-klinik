<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Datakethadir;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    public function index()
    {
        $kethadir = Datakethadir::all();
        $absens = Absen::select('pegawais_id')->groupBy('pegawais_id')->get();

        $countabsen = Absen::get();
        return view('absen.index', compact('kethadir', 'absens', 'countabsen'));
    }
}
