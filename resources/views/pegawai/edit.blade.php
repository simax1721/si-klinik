@extends('layouts.master')

@section('title', 'Tambah Data Pegawai')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6>Ubah Tambah Data Pegawai</h6>
                </div>
                <div class="card-body">
                    <form action="{{ url('pegawai/'.$pegawai->id.'/update') }}" method="post"> @csrf @method("PUT")
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group  my-3">
                                    <label class="form-label">NIP</label>
                                    <input type="text" class="form-control" name="id" disabled value="{{ old('id') == '' ? $pegawai->id : old('id') }}">
                                </div>
                                <small class="text-danger">{{ $errors->first('id') }}</small>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') == '' ? $pegawai->name : old('name') }}">
                                </div>
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tmp_lahir" value="{{ old('tmp_lahir') == '' ? $pegawai->tmp_lahir : old('tmp_lahir') }}">
                                </div>
                                <small class="text-danger">{{ $errors->first('tmp_lahir') }}</small>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir" placeholder=" _" value="{{ old('tgl_lahir') == '' ? $pegawai->tgl_lahir : old('tgl_lahir') }}">
                                </div>
                                <small class="text-danger">{{ $errors->first('tgl_lahir') }}</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Jenis Kelamin</label><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-check" style="margin-left: -20px;">
                                            <input class="form-check-input" type="radio" name="jk" id="jk1" value="laki-laki"  {{ $pegawai->jk == 'laki-laki' ? 'checked' : ''}}>
                                            <label class="form-check-label" for="jk1">
                                                Laki - Laki
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk" id="jk2" value="perempuan"  {{ $pegawai->jk == 'perempuan' ? 'checked' : ''}}>
                                            <label class="form-check-label" for="jk2">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                    <small class="text-danger">{{ $errors->first('jk') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group my-3">
                                    <label class="form-label">Agama</label>
                                    <select name="dataagama_id" id="dataagama_id" class="form-control">
                                        <option value="" disabled selected> Agama</option>
                                        @foreach ($agama as $item)
                                        @if ($pegawai->dataagamas_id == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endif
                                        
                                        @endforeach
                                    </select>
                                </div>
                                <small class="text-danger">{{ $errors->first('dataagama_id') }}</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">No. HP</label>
                                    <input type="text" class="form-control" name="no_hp" value="{{ old('no_hp') == '' ? $pegawai->no_hp : old('no_hp') }}">
                                </div>
                                <small class="text-danger">{{ $errors->first('no_hp') }}</small>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group my-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" disabled name="email" value="{{ $pegawai->email}}">
                                </div>
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                                  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Tanggal Masuk</label>
                                    <input type="date" class="form-control" name="tgl_masuk" placeholder=" _" value="{{ old('tgl_masuk') == '' ? $pegawai->tgl_masuk : old('tgl_masuk') }}">
                                </div>
                                <small class="text-danger">{{ $errors->first('tgl_masuk') }}</small>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group my-3">
                                    <label class="form-label">Alamat</label>
                                    <textarea name="alamat"  rows="2" class="form-control" placeholder="Alamat">{{ old('alamat') == '' ? $pegawai->alamat : old('alamat') }}</textarea>
                                </div>
                                <small class="text-danger">{{ $errors->first('alamat') }}</small>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection