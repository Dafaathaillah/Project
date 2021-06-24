@extends('layouts.layout.master')

@section('title')
    | FORM CREATE KENDARAAN MASUK
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
                        <a href="index.html"><i class="feather icon-home"></i></a>
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
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h5>Form Create Daftar Kendaraan Masuk</h5>
                            </div>
                        </div>
                    </div> 
                        <div class="card-block">
                            <form method="post" action="{{ route('kendaraanmasuk.store') }}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                 <div class="row form-group">
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Gambar</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="file" name="gambar" class="form-control" id="no_rangka" class="form-control date" placeholder="Gambar">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-3">
                                        <label class="col-form-label">No rangka</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="no_rangka" name="no_rangka" class="form-control" id="no_rangka" class="form-control date" placeholder="no_rangka">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-3">
                                        <label class="col-form-label">No mesin</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="no_mesin" name="no_mesin" class="form-control" id="no_mesin" class="form-control date" placeholder="no_mesin">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Type</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="type" name="type" class="form-control" id="type" class="form-control date" placeholder="type">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Jenis</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="jenis" name="jenis" class="form-control" id="jenis" class="form-control date" placeholder="jenis">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Warna</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="warna" name="warna" class="form-control" id="warna" class="form-control date" placeholder="warna">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Tahun Pembuatan</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="date" name="tahun_pembuatan" class="form-control" id="tahun_pembuatan" class="form-control date" placeholder="tahun_pembuatan">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Tanggal Masuk</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="date" name="tanggal_masuk" class="form-control" id="tanggal_masuk" class="form-control date" placeholder="tanggal_masuk">
                                    </div>
                                </div>
                                <div class="float-right my-2">
                                    <button type="submit" class="btn btn-primary btn-md">Submit</button>
                                    <a class="btn btn-warning" href="{{ route('kendaraanmasuk.index') }}">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection