<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="{{asset('image/logo smk samudra.png')}}" alt="">
        <h1 class="sitename mt-1">SPMB</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul class="">
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#jadwal-daftar">Jadwal Daftar</a></li>
          <li><a href="#program">Program Keahlian</a></li>
          <li><a href="#fasilitas">Fasilitas</a></li>
          <li><a href="#kontak">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="{{route('login')}}">Login</a>
    </div>
</header>