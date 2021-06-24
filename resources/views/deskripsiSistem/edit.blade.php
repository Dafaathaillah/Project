@extends('layouts.layout.master')

@section('title')
    | FORM KENDARAAN MASUK
@endsection

@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-watch bg-c-blue"></i>
                <div class="d-inline">
                    <h5>DESKRIPSI SISTEM</h5>
                    <span>Deskripsi Sistem Inventory Dealer</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#!">Deskripsi Sistem</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Deskripsi Sistem</h5>
                            </div>
                            <div class="card-block">
                                <form method="post" action="{{ route('deskripsi.update', $desc->id) }}" id="myForm">
                                    @csrf
                                @method('PUT') 
                                        <div class="card">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Deskripsi</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="isi" class="form-control" id="isi" value="{{ $desc->isi }}" aria-describedby="text">
                                                </div>
                                            </div>
                                            <div class="float-right my-2">
                                                <button type="submit" class="btn-primary btn-round btn-sm">Submit</button>
                                                <a class="btn btn-danger btn-round btn-sm" href="{{ route('deskripsi.index') }}">Cancel</a>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection