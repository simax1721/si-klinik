@extends('layouts.master')

@section('title', 'Ubah Jadwal Piket')

@section('css')
    
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row ">
                        <div class="col-md-6">
                            <h6>Data Jadwal Piket</h6>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="{{ url('/piket/create') }}" class="btn btn-success btn-sm text-white">+ Data Jadwal Piket</a>
                            {{-- <a href="{{ url('/piket/indexedit') }}" class="btn btn-warning btn-sm text-white">Ubah Jadwal Piket</a> --}}
                        </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($haripiket as $hari)
                        <div class="col border p-2">
                            <span class="fw-bolder">{{ $hari->name }}</span> <br>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col border p-2">
                        @foreach ($jadwalpiket as $jadwal)
                            @if ($jadwal->dataharis_id == 1)
                            <div class="row mb-2">
                                <div class="col-9">
                                    <span class="">{{ $jadwal->pegawai->name }}</span>
                                </div>
                                <div class="col-3 text-end ">
                                    <a href="{{ url('piket/'.$jadwal->id.'/destroy') }}" ><span class="badge text-bg-danger">X</span></a>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col border p-2">
                        @foreach ($jadwalpiket as $jadwal)
                            @if ($jadwal->dataharis_id == 2)
                            <div class="row mb-2">
                                <div class="col-9">
                                    <span class="">{{ $jadwal->pegawai->name }}</span>
                                </div>
                                <div class="col-3 text-end ">
                                    <a href="{{ url('piket/'.$jadwal->id.'/destroy') }}" ><span class="badge text-bg-danger">X</span></a>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col border p-2">
                        @foreach ($jadwalpiket as $jadwal)
                            @if ($jadwal->dataharis_id == 3)
                            <div class="row mb-2">
                                <div class="col-9">
                                    <span class="">{{ $jadwal->pegawai->name }}</span>
                                </div>
                                <div class="col-3 text-end ">
                                    <a href="{{ url('piket/'.$jadwal->id.'/destroy') }}" ><span class="badge text-bg-danger">X</span></a>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col border p-2">
                        @foreach ($jadwalpiket as $jadwal)
                        @if ($jadwal->dataharis_id == 4)
                        <div class="row mb-2">
                            <div class="col-9">
                                <span class="">{{ $jadwal->pegawai->name }}</span>
                            </div>
                            <div class="col-3 text-end ">
                                <a href="{{ url('piket/'.$jadwal->id.'/destroy') }}" ><span class="badge text-bg-danger">X</span></a>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    </div>
                    <div class="col border p-2">
                        @foreach ($jadwalpiket as $jadwal)
                            @if ($jadwal->dataharis_id == 5)
                            <div class="row mb-2">
                                <div class="col-9">
                                    <span class="">{{ $jadwal->pegawai->name }}</span>
                                </div>
                                <div class="col-3 text-end ">
                                    <a href="{{ url('piket/'.$jadwal->id.'/destroy') }}" ><span class="badge text-bg-danger">X</span></a>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')

@endsection