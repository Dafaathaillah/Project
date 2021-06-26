@extends('layouts.layout.master')

@section('title')
| FORM KENDARAAN KELUAR
@endsection

@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-grid bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Kendaraan Keluar</h5>
                    <span>Daftar Kendaraan Keluar</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Kendaraan Keluar</a></li>
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
                            <h5>Form Edit Daftar Kendaraan Keluar</h5>
                        </div>
                        <h5>
                            <a class="btn btn-primary btn-sm font-weight-bold p-2" style="font-size: 14px" href="{{ route('KendaraanKeluar.create') }}"><i class="fa fa-plus"></i>Tambah Data Baru</a>
                        </h5>
                    </div>
                    <div class="card-block">
                        <form method="post" action="{{ route('KendaraanKeluar.update', $KendaraanKeluar->id) }}" id="myForm">
                            @csrf
                            @method('PUT')
                            <div class="card">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Penerima</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="penerima" class="form-control" id="penerima" value="{{ $KendaraanKeluar->penerima }}" aria-describedby="penerima">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kontak</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="kontak_penerima" class="form-control" id="kontak_penerima" value="{{ $KendaraanKeluar->kontak_penerima }}" aria-describedby="kontak_penerima">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Keluar</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tanggal_keluar" class="form-control" id="tanggal_keluar" value="{{ $KendaraanKeluar->tanggal_keluar }}" aria-describedby="tanggal_keluar">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-3">
                                        <label class="col-form-label">ID Mesin</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="kendaraan_masuks" id="kendaraan_masuks">
                                            @foreach($KendaraanMasuk as $msk)
                                            <option value="{{$msk->id}}" {{ $KendaraanKeluar->id == $msk->id ? 'selected' : ''}}>{{$msk->no_mesin}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="float-right my-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
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