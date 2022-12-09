<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Datakethadir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $datakethadirs = Datakethadir::all();

        // $absen = Absen::where('pegawais_id', '=', Auth::user()->id)->first();
        $cekabsen = 0;
        if ($absen = Absen::where('pegawais_id', '=', Auth::user()->id)->first()) {
            $cekabsen = count($absen->where('created_at', '=', date('Y-m-d H:i:s', strtotime($absen->created_at)))->get());
        }
        
        // where('created_at', '=', date('Y-m-d'))
        // dd(date('Y-m-d', strtotime($absen->created_at)));

        // dd(count($cekabsen));

        return view('dashboard', compact('datakethadirs', 'cekabsen', 'absen'));
    }

    public function submitAbsen($id, Request $request)
    {
        $request->validate([
            'datakethadirs_id' => 'required'
        ]);
        Absen::create([
            'pegawais_id' => $id,
            'datakethadirs_id' => $request->datakethadirs_id,
        ]);

        return redirect('/dashboard');
    }
}
