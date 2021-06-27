@extends('layouts.layout.master')

@section('title')
    | FORM KENDARAAN MASUK
@endsection

@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-grid bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Kendaraan Masuk</h5>
                    <span>Daftar Kendaraan Masuk</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Kendaraan Masuk</a></li>
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
                        <div class="float-right my-2">
                            <h5>Form Edit Daftar Kendaraan Masuk</h5>
                        </div>
                        <h5>
                            <a class="btn btn-primary btn-sm font-weight-bold p-2" style="font-size: 14px" href="{{ route('kendaraanmasuk.create') }}"><i class="fa fa-plus"></i>Tambah Data Baru</a>
                        </h5>
                    </div>
                    <div class="card-block">
                        <form method="post" action="{{ route('kendaraanmasuk.update', $kendaraanMasuk->id) }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                    @method('PUT') 
                            <div class="card">
                            <div class="row form-group">
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Gambar</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="file" name="gambar" class="form-control" id="no_rangka" class="form-control date" placeholder="no_rangka">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-3">
                                        <label class="col-form-label"></label>
                                    </div>
                                    <div class="col-sm-9">
                                           <img src="{{$kendaraanMasuk->gambar}}" style="width: 20%">
                                     <input type="hidden" name="gambar_old" class="form-control" id="no_rangka" class="form-control date" value="{{$kendaraanMasuk->gambar}}" placeholder="no_rangka">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No Rangka</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_rangka" class="form-control" id="no_rangka" value="{{ $kendaraanMasuk->no_rangka }}" aria-describedby="no_rangka">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No Mesin</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_mesin" class="form-control" id="no_mesin" value="{{ $kendaraanMasuk->no_mesin }}" aria-describedby="no_mesin">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Type</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="type" class="form-control" id="type" value="{{ $kendaraanMasuk->type }}" aria-describedby="type">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="jenis" class="form-control" id="jenis" value="{{ $kendaraanMasuk->jenis }}" aria-describedby="jenis">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Warna</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="warna" class="form-control" id="warna" value="{{ $kendaraanMasuk->warna }}" aria-describedby="warna">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tahun Pembuatan</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tahun_pembuatan" class="form-control" id="tahun_pembuatan" value="{{ $kendaraanMasuk->tahun_pembuatan }}" aria-describedby="tahun_pembuatan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Masuk</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tanggal_masuk" class="form-control" id="tanggal_masuk" value="{{ $kendaraanMasuk->tanggal_masuk }}" aria-describedby="tanggal_masuk">
                                    </div>
                                </div>
                            </div>
                            <div class="float-right my-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-warning" href="{{ route('kendaraanmasuk.index') }}">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection