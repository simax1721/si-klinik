<?php

namespace App\Http\Controllers;

use App\Models\Datahari;
use App\Models\Jadwalpiket;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PiketController extends Controller
{
    public function index()
    {
        $haripiket = Datahari::all();
        $jadwalpiket = Jadwalpiket::get();
        return view('piket.index', compact('jadwalpiket', 'haripiket'));

    }

    public function create()
    {
        $pegawais = Pegawai::all();
        $haris = Datahari::all();
        return view('piket.create', compact('pegawais', 'haris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pegawais_id' => 'required|unique:jadwalpikets',
            'dataharis_id' => 'required',
        ]);

        Jadwalpiket::create([
            'pegawais_id' => $request->pegawais_id,
            'dataharis_id' => $request->dataharis_id,
        ]);

        return redirect('/piket');
    }

    public function indexedit()
    {
        $haripiket = Datahari::all();
        $jadwalpiket = Jadwalpiket::get();
        return view('piket.indexedit', compact('jadwalpiket', 'haripiket'));
    }

    public function destroy($id)
    {
        Jadwalpiket::destroy($id);
        return redirect('/piket/indexedit');
    }
}
