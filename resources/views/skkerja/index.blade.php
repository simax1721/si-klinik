@extends('layouts.master')

@section('title', 'SK-Kerja')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <style>
        .page-link, .page-item span {
            width:  0 !important;
            height:  0 !important;
            border-radius: 10px !important;
            padding: 20px !important;
        }
    </style>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row ">
                    <div class="col-md-6">
                        <h6>Data SK-Kerja</h6>
                    </div>
                    <div class="col-md-6 text-end">
                        @if (Auth::user()->userroles_id  == 1)
                            <a href="{{ url('/sk-kerja/create') }}" class="btn btn-success btn-sm">+ Tambah Data</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        @if (Auth::user()->userrole->id == 1)
                        <thead>
                            <tr>
                                <th>No. SK</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Profesi</th>
                                <th>Pangkat</th>
                                <th>Status SK</th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skkerjas as $row)
                            <tr>
                                <td>SK/ZT/10/15/000{{ $row->id }}</td>
                                <td>{{ $row->pegawai->nip }}</td>
                                <td>{{ $row->pegawai->name }}</td>
                                <td>{{ $row->dataprofesi->name }}</td>
                                <td>{{ $row->datapangkat->name }}</td>
                                <td>{{ $row->status_sk }}</td>
                                <td>
                                    <a href="{{ url('sk-kerja/'.$row->id.'/edit') }}" class="btn btn-warning btn-sm text-white">Edit</a>
                                    <a href="{{ url('sk-kerja/'.$row->id.'/destroy') }}" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No. SK</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Profesi</th>
                                <th>Pangkat</th>
                                <th>Status SK</th>
                                <th>Menu</th>
                            </tr>
                        </tfoot>
                        @endif
                        
                        @if (Auth::user()->userrole->id == 2)
                        <thead>
                            <tr>
                                <th>No. SK</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Profesi</th>
                                <th>Pangkat</th>
                                <th>Status SK</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skkerjas as $row)
                            <tr>
                                <td>SK/ZT/10/15/000{{ $row->id }}</td>
                                <td>{{ $row->pegawai->nip }}</td>
                                <td>{{ $row->pegawai->name }}</td>
                                <td>{{ $row->dataprofesi->name }}</td>
                                <td>{{ $row->datapangkat->name }}</td>
                                <td>{{ $row->status_sk }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No. SK</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Profesi</th>
                                <th>Pangkat</th>
                                <th>Status SK</th>
                            </tr>
                        </tfoot>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

@endsection