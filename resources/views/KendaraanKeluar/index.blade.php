@extends('layouts.layout.master')
@section('title')
| DAFTAR KENDARAAN KELUAR
@endsection

@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-grid bg-c-blue"></i>
                <div class="d-inline">
                    <h5>KENDARAAN KELUAR</h5>
                    <span>Kendaraan Keluar</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="{{ route('deskripsi.index') }}"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">KENDARAAN KELUAR</a></li>
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
                    <div class="card-header">
                        <a class="btn btn-primary feather icon-plus" href="{{ route('KendaraanKeluar.create') }}">Input Data Kendaraan Keluar</a>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">

                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                            <table class="table table-bordered">
                                <tr>
                                    <th>No Invoice</th>
                                    <th>Gambar</th>
                                    <th>Nomer Rangka</th>
                                    <th>Nomer Mesin</th>
                                    <th>Type</th>
                                    <th>Jenis</th>
                                    <th>Warna</th>
                                    <th>Tahun Pembuatan</th>
                                    <th>Penerima</th>
                                    <th>Kontak Penerima</th>
                                    <th>Tanggal Keluar</th>
                                    <th width="280px">Action</th>
                                </tr>
                                @foreach ($KendaraanKeluar as $KK)
                                <tr>
                                    <td> {{ $KK->id }} </td>
                                    <td><img src="{{$KK->KendaraanMasuk->gambar}}" style="width: 90%"> </td>
                                    <td> {{ $KK->KendaraanMasuk->no_rangka }} </td>
                                    <td> {{ $KK->KendaraanMasuk->no_mesin }} </td>
                                    <td> {{ $KK->KendaraanMasuk->type }} </td>
                                    <td> {{ $KK->KendaraanMasuk->jenis }} </td>
                                    <td> {{ $KK->KendaraanMasuk->warna }} </td>
                                    <td> {{ $KK->KendaraanMasuk->tahun_pembuatan }} </td>
                                    <td> {{ $KK->penerima }} </td>
                                    <td> {{ $KK->kontak_penerima }} </td>
                                    <td> {{ $KK->tanggal_keluar }} </td>
                                    <td class="text-center">
                                        <a class="btn btn-primary btn-round btn-sm" href="{{ route('KendaraanKeluar.edit', $KK->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                        <form action="{{ route('KendaraanKeluar.destroy', $KK->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-round btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                {{ $paginate->links('pagination::bootstrap-4') }}
                            </table>
                        </div>
                    </div>
                    <p align="center"><a style="width: 30%" class="btn btn-primary feather icon-download" href="{{ url('export_kendaraankeluar') }}" target="_blank">Unduh Data</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection