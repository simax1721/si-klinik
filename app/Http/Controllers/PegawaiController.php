<?php

namespace App\Http\Controllers;

use App\Models\Dataagama;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::where('userroles_id', '>', 1)->get();

        // dd($pegawais);
        return view('pegawai.index', compact('pegawais'));   
    }

    public function create()
    {
        $agama = Dataagama::all();
        return view('pegawai.create', compact('agama'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:pegawais',
            'name' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'dataagama_id' => 'required',
            'no_hp' => 'required|max:12',
            'email' => 'required|unique:pegawais',
            'alamat' => 'required',
            'tgl_masuk' => 'required',
        ]);

        Pegawai::create([
            'id' => $request->id,
            'name' => $request->name,
            'jk' => $request->jk,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'dataagamas_id' => $request->dataagama_id,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'tgl_masuk' => $request->tgl_masuk,
            'userroles_id' => 2,
            'password' => Hash::make($request->id),
        ]);

        return redirect('/pegawai');
    }

    public function destroy($id)
    {
        Pegawai::destroy($id);
        return redirect('/pegawai');
    }

    public function edit($id)
    {
        $agama = Dataagama::all();
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit', compact('agama', 'pegawai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'dataagama_id' => 'required',
            'no_hp' => 'required|max:12',
            'alamat' => 'required',
            'tgl_masuk' => 'required',
        ]);


        Pegawai::find($id)->update([
            'name' => $request->name,
            'jk' => $request->jk,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'dataagamas_id' => $request->dataagama_id,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'tgl_masuk' => $request->tgl_masuk,
        ]);

        return redirect('/pegawai');
    }
}
