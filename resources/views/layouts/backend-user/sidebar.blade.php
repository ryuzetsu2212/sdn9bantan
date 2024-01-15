<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="{{ asset('img/icons') }}/laravel.jpg" alt="laravel Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SDN 9 Bantan</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('img/icons') }}/codeigniter4.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{ route('user.profile.index') }}" class="d-block">{{ auth()->user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">MANAGE DATA</li>
        <li class="nav-item">
          <a href="{{ route('user.profile.index') }}" class="nav-link {{ Request::is('user/profile') ? 'active' : '' }}">
            <i class="nav-icon fas fa-id-card"></i>
            <p>
              Profil
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('user.change-password.index') }}" class="nav-link {{ Request::is('user/change-password') ? 'active' : '' }}">
            <i class="nav-icon fas fa-unlock"></i>
            <p>
              Ubah Password
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('user.jadwal_pelajaran.index') }}" class="nav-link {{ Request::is('user/jadwal_pelajaran') ? 'active' : '' }}">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Jadwal Pelajaran
            </p>
          </a>
        </li>
      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">SISTEM PENDUKUNG KEPUTUSAN</li>
        <li class="nav-item">
          <a href="{{ route('user.siswa.index') }}" class="nav-link {{ Request::is('user/siswa') ? 'active' : '' }}">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Nilai Siswa
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('user.hitung.index') }}" class="nav-link {{ Request::is('user/hitung') ? 'active' : '' }}">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Hasil Akhir
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>