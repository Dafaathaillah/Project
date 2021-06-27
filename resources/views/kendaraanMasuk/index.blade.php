@extends('layouts.layout.master')
@section('title')
    | DAFTAR KENDARAAN MASUK
@endsection

@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-grid bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>KENDARAAN MASUK</h5>
                        <span>Kendaraan Masuk</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="#"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">KENDARAAN MASUK</a></li>
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
            <a class="btn btn-primary feather icon-plus" href="{{ route('kendaraanmasuk.create') }}">Input Data Kendaraan Masuk</a>
        </div>
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
                                    <th width="280px">Action</th>
                                </tr>
                            @foreach ($kendaraanMasuks as $key => $km)
                                <tr>
                                    <td> {{ $key+1 }} </td>
                                    <td><img src="{{$km->gambar}}" style="width: 90%"></td>
                                    <td> {{ $km->no_rangka }} </td>
                                    <td> {{ $km->no_mesin }} </td>
                                    <td> {{ $km->type }} </td>
                                    <td> {{ $km->jenis }} </td>
                                    <td> {{ $km->warna }} </td>
                                    <td> {{ $km->tahun_pembuatan }} </td>
                                    <td> {{ $km->tanggal_masuk }} </td>
                                    <td class="text-center">
                                        <a class="btn btn-primary btn-round btn-sm" href="{{ route('kendaraanmasuk.edit', $km->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                        <form action="{{ route('kendaraanmasuk.destroy', $km->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-round btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </table>

                        </div>
                        {{$kendaraanMasuks->links()}}

                    </div>
                      {{-- <p align="center"><a style="width: 30%" class="btn btn-primary feather icon-download" href="{{ url('export_kendaraanmasuk') }}" target="_blank">Unduh Data</a></p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection