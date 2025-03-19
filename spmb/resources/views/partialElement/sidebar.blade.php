<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('admin_template/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text">SPMB Mobile</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 ">
        @auth
        <form action="{{route('logout')}}" method="post" class="d-flex">
          @csrf
          <button type="submit" class="btn btn-block border border-dark rounded font-weight-bold"><i class="fas fa-arrow-right-from-bracket"></i> Logout</button>
        </form>
        @endauth
        @guest
          <a href="/login" class="btn btn-block border border-dark rounded font-weight-bold"><i class="fas fa-user"></i> Login as Administrator</a>
        @endguest
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @auth
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer"></i>
              <p class="text-uppercase">Dashboard</p>
            </a>
          </li>
          @endauth
          @auth
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-school"></i>
              <p class="text-uppercase">Jurusan <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/majors" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Jurusan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="majors/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Jurusan</p>
                </a>
              </li>
            </ul>
          </li>
          @endauth
          @auth
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-university"></i>
              <p class="text-uppercase">Sekolah <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/schools" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Sekolah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/schools/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sekolah</p>
                </a>
              </li>
            </ul>
          </li>
          @endauth
          <li class="nav-item">
            <a href="/students" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p class="text-uppercase">Daftar Siswa</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/panduan" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p class="text-uppercase">Panduan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-arrow-right-from-bracket"></i>
              <p class="text-uppercase">Keluar</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>