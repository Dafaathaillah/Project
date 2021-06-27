@section('sidebar')
<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="">
                    <a href="{{ route('deskripsi.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('kendaraanmasuk.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-list"></i>
                        </span>
                        <span class="pcoded-mtext">Kendaraan Masuk</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('KendaraanKeluar.index') }}" class="waves-effect waves-dark">

                        <span class="pcoded-micon">
                            <i class="feather icon-list"></i>
                        </span>
                        <span class="pcoded-mtext">Kendaraan Keluar</span>
                    </a>
                </li>
                <li class="">
                    <a href="/dashboard" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-list"></i>
                        </span>
                        <span class="pcoded-mtext">Daftar Kendaraan</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@show