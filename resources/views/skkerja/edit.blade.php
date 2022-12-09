@extends('layouts.master')

@section('title', 'Tambah SK-Kerja')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6>Form Tambah Data Pegawai</h6>
            </div>
            <div class="card-body">
                <form action="{{ url('sk-kerja/'.$skkerja->id.'/update') }}" method="post"> @csrf @method("PUT")
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group my-3">
                                <label class="form-label"></label>
                                <input type="text" class="form-control form-control-sm" disabled value="{{ $skkerja->pegawai->name }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('pegawais_id') }}</small>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group my-3">
                                <label class="form-label">Status SK</label>
                                <select class="js-example-basic-single form-control" name="status_sk">
                                    <option value="" disabled selected>Status SK</option>
                                        <option value="Aktif" {{ $skkerja->status_sk == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                        <option value="Tidak Aktif" {{ $skkerja->status_sk == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                  </select>
                            </div>
                            <small class="text-danger">{{ $errors->first('status_sk') }}</small>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group my-3">
                                <label class="form-label"></label>
                                <select class="js-example-basic-single form-control form-control" name="dataprofesis_id">
                                    <option value="" disabled selected>Profesi</option>
                                    @foreach ($profesis as $row)
                                        @if ($row->id == $skkerja->dataprofesis_id)
                                        <option selected value="{{ $row->id }}">{{ $row->name }}</option>
                                        @else
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                        @endif
                                    @endforeach
                                  </select>
                            </div>
                            <small class="text-danger">{{ $errors->first('dataprofesis_id') }}</small>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group my-3">
                                <label class="form-label"></label>
                                <select class="js-example-basic-single form-control" name="datajabatans_id">
                                    <option value="" disabled selected>Pangkat</option>
                                    @foreach ($datajabatans as $row)
                                    @if ($row->id == $skkerja->datapangkats_id)
                                    <option selected value="{{ $row->id }}">{{ $row->name }}</option>
                                    @else
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endif
                                    @endforeach
                                  </select>
                            </div>
                            <small class="text-danger">{{ $errors->first('datajabatans_id') }}</small>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-success btn-sm">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    </script>
@endsection
