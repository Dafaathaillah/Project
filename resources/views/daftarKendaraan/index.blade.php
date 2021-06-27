@extends('layouts.layout.master')
@section('title')
    | DAFTAR KENDARAAN
@endsection

@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-grid bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>DASHBOARD</h5>
                        <span>Daftar Kendaraan</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">DAFTAR KENDARAAN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
    <div class="card">
        <div class="card-block table-border-style">
            <div class="table-responsive">

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table id="tableok" class="table table-bordered">
                <tr>
                    <th>ID Barang</th>
                    <th>Gambar</th>
                    <th>Nomer Rangka</th>
                    <th>Nomer Mesin</th>
                    <th>Type</th>
                    <th>Jenis</th>
                    <th>Warna</th>
                    <th>Tahun Pembuatan</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th>
                </tr>
            @foreach ($KendaraanKeluar as $db)
                <tr>
                    <td> {{ $db->id }} </td>
                    <td><img src="{{$db->KendaraanMasuk->gambar}}" style="width: 90%"> </td>
                    <td> {{ $db->KendaraanMasuk->no_rangka }} </td>
                    <td> {{ $db->KendaraanMasuk->no_mesin }} </td>
                    <td> {{ $db->KendaraanMasuk->type }} </td>
                    <td> {{ $db->KendaraanMasuk->jenis }} </td>
                    <td> {{ $db->KendaraanMasuk->warna }} </td>
                    <td> {{ $db->KendaraanMasuk->tahun_pembuatan }} </td>
                    <td> {{ $db->KendaraanMasuk->tanggal_masuk }} </td>
                    <td> {{ $db->tanggal_keluar }} </td>
                </tr>
            @endforeach

            </table>
            {{ $paginate->links('pagination::bootstrap-4') }}
                            <br>
                        </div>
                    </div>
                </div>
                {{-- <p align="center"><a style="width: 30%" class="btn btn-primary feather icon-download" href="{{ url('export_alldata') }}" target="_blank">Unduh Data</a></p> --}}
            </div>
        </div>
    </div>
</div>
@endsection