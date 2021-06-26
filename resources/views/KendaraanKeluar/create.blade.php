@extends('layouts.layout.master')

@section('title')
| FORM CREATE KENDARAAN KELUAR
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
                        <a href="index.html"><i class="feather icon-home"></i></a>
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
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h5>Form Create Daftar Kendaraan Keluar</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <form method="post" action="{{ route('KendaraanKeluar.store') }}" id="myForm">
                            @csrf
                            <!-- <input type="text" name> -->
                            <div class="row form-group">
                                <div class="col-sm-3">
                                    <label class="col-form-label">Penerima</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="penerima" class="form-control" id="penerima" class="form-control date" placeholder="penerima">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-3">
                                    <label class="col-form-label">kontak</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="kontak_penerima" class="form-control" id="kontak_penerima" class="form-control date" placeholder="kontak penerima">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-3">
                                    <label class="col-form-label">Tanggal Keluar</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="date" name="tanggal_keluar" class="form-control" id="tanggal_keluar" class="form-control date">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-3">
                                    <label class="col-form-label">ID Mesin</label>
                                </div>
                                <div class="col-sm-9">
                                    <select class="form-control" name="kendaraan_masuks" id="kendaraan_masuks">
                                        @foreach($KendaraanMasuk as $msk)
                                        <option value="{{$msk->id}}">{{$msk->no_mesin}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="float-right my-2">
                                <button type="submit" class="btn btn-primary btn-md">Submit</button>
                                <a class="btn btn-warning" href="{{ route('KendaraanKeluar.index') }}">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection