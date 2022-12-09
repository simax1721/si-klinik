@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-12 text-center text-uppercase" >
      <h2 style="font-family: Arial !important " class="fw-bolder">Sistem Informasi Data Pegawai Klinik Kesehatan</h2>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col">
      <div class="card">
        <div class="card-title"></div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>Tanggal Absen</th>
                  <th>Status Absen</th>
                  <th>Menu</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{ date('l, d F Y') }}</td>
                  @if ($cekabsen > 0)
                      <td>{{ $absen->datakethadir->name }}</td>
                      <td> Telah Absen</td>
                  @endif
                  @if ($cekabsen == null)
                    <form action="{{ url('absenpegawai/'.Auth::user()->id.'/submit') }}" method="post"> @csrf
                      <td>
                        <select name="datakethadirs_id" id="" class="form-control">
                          <option value="" disabled selected >Keterangan</option>
                          @foreach ($datakethadirs as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('datakethadirs_id') }}</small>
                      </td>
                      <td class="text-center"><button type="submit" class="btn btn-info text-light">Absen</button></td>
                    </form>
                  @endif
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div style="height: 10rem"></div>
@endsection