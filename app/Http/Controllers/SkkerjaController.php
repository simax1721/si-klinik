<?php

namespace App\Http\Controllers;

use App\Models\DataPangkat;
use App\Models\Dataprofesi;
use App\Models\Pegawai;
use App\Models\Skkerja;
use Illuminate\Http\Request;

class SkkerjaController extends Controller
{
    public function index()
    {
        $skkerjas = Skkerja::all();
        return view('skkerja.index', compact('skkerjas'));
    }

    public function create()
    {
        $pegawais = Pegawai::all();
        $profesis = Dataprofesi::all();
        $datajabatans = DataPangkat::all();
        return view('skkerja.create', compact('pegawais', 'profesis', 'datajabatans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pegawais_id' => 'required',
            'status_sk' => 'required',
            'dataprofesis_id' => 'required',
            'datajabatans_id' => 'required',
        ]);

        Skkerja::create([
            'pegawais_id' => $request->pegawais_id,
            'dataprofesis_id' => $request->dataprofesis_id,
            'datapangkats_id' => $request->datajabatans_id,
            'status_sk' => $request->status_sk,
        ]);

        return redirect('/sk-kerja');
    }

    public function edit($id)
    {
        $skkerja = Skkerja::find($id);
        $profesis = Dataprofesi::all();
        $datajabatans = DataPangkat::all();
        return view('skkerja.edit', compact('skkerja', 'profesis', 'datajabatans'));
    }

    public function update(Request $request, $id)
    {
        Skkerja::find($id)->update([
            'dataprofesis_id' => $request->dataprofesis_id,
            'datapangkats_id' => $request->datajabatans_id,
            'status_sk' => $request->status_sk,
        ]);
        return \redirect('/sk-kerja');
    }

    public function destroy($id)
    {
        Skkerja::destroy($id);
        return redirect('/sk-kerja');
    }
}
