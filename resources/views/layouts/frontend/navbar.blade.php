<div class="clever-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <!-- Menu -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/" style="font-size: 24px;">
                <img src="{{ asset('img/icons') }}/bengkalis1.png" width="50" alt=""> SDN 9 Bantan
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('/') || Request::is('home') ? 'active' : '' }}">
                        <a class="nav-link" href="/" style="font-size: 18px;">Beranda</a>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('about') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 18px;">
                            Profil
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profilsekolah') }}">Profil Sekolah</a>
                            <a class="dropdown-item" href="{{ route('visimisi') }}">Visi Misi</a>
                            <a class="dropdown-item" href="{{ route('contact') }}">Profil Guru</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('informasi') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownInformasi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 18px;">
                            Informasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownInformasi">
                            <a class="dropdown-item" href="{{ route('pengumuman') }}">Pengumuman</a>
                            <a class="dropdown-item" href="{{ route('artikel') }}">Berita</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('jadwal') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownJadwal" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 18px;">
                            Jadwal Pelajaran
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownJadwal">
                            <a class="dropdown-item" href="{{ route('kelas1') }}">Kelas I</a>
                            <a class="dropdown-item" href="{{ route('kelas2a') }}">Kelas II.A</a>
                            <a class="dropdown-item" href="{{ route('kelas2b') }}">Kelas II.B</a>
                            <a class="dropdown-item" href="{{ route('kelas3') }}">Kelas III</a>
                            <a class="dropdown-item" href="{{ route('kelas4a') }}">Kelas IV.A</a>
                            <a class="dropdown-item" href="{{ route('kelas4b') }}">Kelas IV.B</a>
                            <a class="dropdown-item" href="{{ route('kelas5') }}">Kelas V</a>
                            <a class="dropdown-item" href="{{ route('kelas6a') }}">Kelas VI.A</a>
                            <a class="dropdown-item" href="{{ route('kelas6b') }}">Kelas VI.B</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="{{ route('artikel.search') }}" method="GET">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                @auth
                <div class="dropdown ml-3">
                    <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                        @if(auth()->check() && auth()->user()->isAdmin())
                        <a class="dropdown-item" href="{{ route('admin.index') }}">Admin Dashboard</a>
                        @else
                        <a class="dropdown-item" href="{{ route('user.index') }}">User Dashboard</a>
                        @endif
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </div>
                </div>
                @endauth
            </div>
        </nav>

    </div>
</div>