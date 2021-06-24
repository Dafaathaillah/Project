@extends('layouts.layout.master')
@section('title')
    | Deskripsi Sistem
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
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li class="first-opt"><i
                                                        class="feather icon-chevron-left open-card-option"></i>
                                                </li>
                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                <li>
                                                            <i class=""></i>
                                                </li>
                                                <li><i class=""></i></li>
                                                <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        @foreach ($desc as $dsc)
                                    <p>
                                        {{ $dsc->isi }}
                                    </p>
                                    <div>
                                    <a class="btn btn-primary btn-round btn-sm" href="{{ route('deskripsi.edit', $dsc->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                    <form action="{{ route('deskripsi.destroy', $dsc->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-round btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                    </form>
                                    </div>
                                @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
