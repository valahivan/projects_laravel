<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SPMB SMK Samudra | Home</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('image/logo smk samudra.png')}}" rel="icon">
  <link href="{{asset('iLanding/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('spmb_admin/plugins/fontawesome-free/css/all.min.css')}}">

  <!-- Vendor CSS Files -->
  <link href="{{asset('iLanding/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('iLanding/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('iLanding/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('iLanding/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('iLanding/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <!-- Main CSS File -->
  <link href="{{asset('iLanding/assets/css/main.css')}}" rel="stylesheet">
</head>

<body class="index-page">

  @include('partialElement.header')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="500">

              <h1 class="mb-4 text-primary" style="font-weight:500;">SMK SAMUDRA</h1>

              <h2 class="mb-4 mb-md-5 text-uppercase">smart school yang siap dan selalu mendidik dengan hati dan teknolgi</h2>

              <div class="hero-buttons">
                <a href="/students/create" class="btn btn-lg btn-primary me-0 me-sm-2 mx-1">DAFTAR SEKARANG <i class="fas fa-arrow-right"></i></a>
                <a href="/login" class="btn btn-lg btn-primary me-0 me-sm-2 mx-1">LOGIN <i class="fas fa-arrow-right"></i></a></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="500">
              <img src="{{asset('image/hero-img.png')}}" alt="Hero Image" class="img-fluid">
            </div>
          </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="jadwal-daftar" class="about section">
      <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
       <div class="card-header text-uppercase px-1 py-2">
        <strong>waktu pendaftaran dan daftar ulang</strong>
       </div>

       <div class="card-body">
          <p href="" class="btn btn-success mt-3">Gelombang 1</p>
          <p>01 Februari - 30 April 2025</p>

          <p href="" class="btn btn-success mt-2">Gelombang 2</p>
          <p>01 mei- 12 Juli 2025</p>
          <h6 class="fw-bold">Pukul : 09:00 - 15:00 WIB</h6>
       </div>

       <div class="card-header text-uppercase px-1 py-2">
        <strong>tempat pendaftaran</strong>
       </div>
       <div class="card-body">
          <h5 class="text-uppercase mt-3">gedung smk samudra</h5>
          <p>Jl. Raya Cisolok Km. 1, Kp. Cigenteng RT.001/007 Desa Cisolok, Kec, Cisolok Kab. Sukabumi 43366</p>
       </div>

       <div class="card-header text-uppercase px-1 py-2">
        <strong>informasi pendaftaran</strong>
       </div>
       <div class="card-body">
         <p class="mt-3">Hubungi via Whatsapp dengan klik tombol kontak</p>
          <a href="" class="btn btn-success">Much. Eko Fuzi, SE</a>
          <a href="" class="btn btn-success">Yusuf Saeful Bayana, S.Kom</a>
       </div>
       <div class="card-header mt-3 px-1 py-2">
        <strong>Atau datang langsung ke Gedung SMK Samudra</strong>
       </div>
       <div class="card-header text-uppercase px-1 py-2">
        <strong>informasi lengkap silahkan download brosur dibawah ini</strong>
       </div>
       <a href="{{route('donwload', ['file' => 'brosur.jpg'])}}" class="btn text-uppercase my-3" style="background-color: #00ffff;"><i class="fas fa-download"></i> download brosur spmb smk samudra</a>
       <div class="info p-2 mt-1" style="background-color: yellow">
        <strong>INFO PENTING !</strong> <br> Ayo buruan daftar <b>Kuota Terbatas</b> bagi pendaftar pertama
       </div>
      </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">
          <div class="d-flex align-items-center flex-wrap" data-aos="zoom-in" data-aos-delay="300">
            <div class="col-lg-6 col-12 bg-subtle p-4">
              <h5 class="text-primary text-uppercase">tentang</h5>
              <h2 class="my-3">SMK SAMUDRA</h2>
              <p class="text-secondary fs-5">Adalah salah satu pendidikan dengan jenjang SMK di Cisolok, Kec. Cisolok, Kab. Sukabumi SMK Samudra terus tetap konsisten dan berkomitmen dalam upaya kontribusi mencerdaskan anak bangsa melalu program unggulan dan berkualitas</p>
              <div class="hero-buttons my-3">
                <a href="/students/create" class="btn btn-lg btn-primary me-0 me-sm-2 mx-1">DAFTAR YUK! <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
            <div class="col-lg-6 col-12" data-aos="zoom-in" data-aos-delay="300">
              <img src="{{asset('image/smk.jpeg')}}" alt="" width="100%">
            </div>
          </div>
      </div>

    </section><!-- /Features Section -->

    <!-- Features Cards Section -->
    <section id="program" class="features-cards section">
      <header class="text-center container" data-aos="fade-up" data-aos-delay="200">
        <h5 class="text-uppercase text-primary">program</h5>
        <h1 class="text-wark my-4 text-uppercase fw-bold">program keahlian di smk samudra</h1>
      </header>
      <div class="container mt-5">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-sm-12" data-aos="fade-right" data-aos-delay="300">
            <img src="{{asset('image/features-3.png')}}" alt="" width="100%">
          </div>
          <div class="col-lg-8 col-sm-12 program">
            <div class="row justify-content-evenly">
              <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="card-info d-flex justify-content-between">
                  <div class="icon text-primary fs-1 me-3">
                    <i class="fas fa-computer"></i>
                  </div>
                  <div class="description mt-2">
                    <h4 class="text-uppercase text-primary">teknik komputer & jaringan</h4>
                    <p class="text-secondary">Teknisi Jaringan (Network Enginer) - Network Administrator - Administrasi Server - Computer Integrator - VOIP Integrator - Linux Administrator - WEB Developer - WEB Database - Jaringan Mikrotik dan Sisco - Artifical Inteligent (AI) - Internet of Thing (IoT)</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="card-info d-flex justify-content-between">
                  <div class="icon text-primary fs-1 me-3">
                    <i class="fas fa-gear"></i>
                  </div>
                  <div class="description mt-2">
                    <h4 class="text-uppercase text-primary">teknik kendaraan ringan otomotif</h4>
                    <p class="text-secondary">Teknisi Mekanik Otomotif - Industri Manufactur Otomotif - Teknisi Perawatan dan Perbaikan Kelistrikan - Teknisi Perawatan dan Perbaikan Mesin Konvensioanl - Teknisi Perawatan dan Perbaikan Mesin Injeksi (Diesel dan EFI)</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="card-info d-flex justify-content-between">
                  <div class="icon text-primary fs-1 me-3">
                    <i class="fas fa-book-open"></i>
                  </div>
                  <div class="description mt-2">
                    <h4 class="text-uppercase text-primary">akuntansi</h4>
                    <p class="text-secondary">Akuntansi Pembelian - Administrasi Gudang - Administrasi Keuangan - Administrasi Pemasaran - Administrasi Pajak - Perbankan</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="card-info d-flex justify-content-between">
                  <div class="icon text-primary fs-1 me-3">
                    <i class="fas fa-building"></i>
                  </div>
                  <div class="description mt-2">
                    <h4 class="text-uppercase text-primary">administrasi perkantoran</h4>
                    <p class="text-secondary">Pemeliharaan kantor - kegiatan perencanaan keuangan - kegiatan pencatatan dan pengarsipan - logistik fisik - penagihan - pembuatan faktur.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Features Cards Section -->

    <!-- Features 2 Section -->

    <!-- Stats Section -->
    <section id="fasilitas" class="stats section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <header class="text-center container" data-aos="fade-up" data-aos-delay="200">
          <h5 class="text-uppercase text-primary">fasilitas</h5>
          <h1 class="text-wark my-4 text-uppercase fw-bold">fasilitas di smk samudra</h1>
        </header>
        <div class="row gy-4 justify-content-between">
          <div class="col-lg-4 col-12" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue shadow rounded p-5">
                <div class="icon icon-blue">
                  <i class="bi bi-building-exclamation"></i>
                </div>
                <h4>Ruang kelas yang nyaman.</h4>
                <h4>Lab. Komputer TKJ</h4>
                <h4> Lab. Komputer Akuntansi</h4>
                <h4>Bengkel, Workshop / ruang praktik TKR</h4>
                <a href="#" class="read-more read-more-blue"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-12" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box orange shadow rounded p-5">
                <div class="icon icon-orange">
                  <i class="bi bi-building-exclamation"></i>
                </div>
                <h4>Lab Administrasi Perkantoran</h4>
                <h4>Perpustakaan</h4>
                <h4>Kantor Bursa Kerja Khusus (BKK)</h4>
                <h4>Lapangan Olahraga (Futsal, Voli, Takraw, dan Basket)</h4>
                <a href="#" class="read-more read-more-orange"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-12" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box green shadow rounded p-5">
                <div class="icon icon-green">
                  <i class="bi bi-building-exclamation"></i>
                </div>
                <h4>Mushola</h4>
                <h4>Panggung Seni</h4>
                <h4>Free Wifi</h4>
                <h4>Ruangan Serba Guna</h4>
                <a href="#" class="read-more read-more-green"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          </div>
      </div>
    </section><!-- /Stats Section -->

    <!-- Pricing Section -->
    <section id="kontak" class="pricing">
      <header class="text-center container" data-aos="fade-up" data-aos-delay="200">
        <h5 class="text-uppercase text-primary">kontak</h5>
        <h1 class="text-wark my-4 text-uppercase fw-bold">hubungi kami</h1>
      </header>
      <div class="container">
        <div class="d-flex justify-content-between flex-wrap">
          <div class="col-lg-6 col-sm-12">
            <div class="contact-content" data-aos="zoom-in" data-aos-delay="300">
              <div class="col-lg-5 col-12 card-box p-4">
                <div class="icon fs-1 text-primary">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <h3 class="text-dark">Alamat</h3>
                <p class="text-secondary">SMK SAMUDRA<br>Jl. Cisolok Km.1 KP. Cigenteng RT.001/007 Desa Cisolok Kec. Cisolok Kabupaten Sukabumi Jawa Barat 43366</p>
              </div>
              <div class="col-lg-5 col-12 card-box p-4">
                <div class="icon fs-1 text-primary">
                  <i class="bi bi-telephone"></i>
                </div>
                <h3 class="text-dark">Hubungi Kami</h3>
                <p class="text-secondary">Much. Eko Fauzi, SE, : 085723986404
                Yusuf Saeful Bayan, S.Kom : 083879140982</p>
              </div>
              <div class="col-lg-5 col-12 card-box p-4">
                <div class="icon fs-1 text-primary">
                  <i class="bi bi-envelope"></i>
                </div>
                <h3 class="text-dark">Email</h3>
                <p class="text-secondary">info@smksamudra.sch.id</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12" data-aos="zoom-in" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1014037.5158143063!2d106.97674223639176!3d-6.8805344914832824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e42836a106da209%3A0x79895c1a9d8e79ce!2sSMK%20SAMUDRA%20CISOLOK!5e0!3m2!1sid!2sid!4v1644323393371!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section><!-- /Pricing Section -->

  </main>

  @include('partialElement.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('iLanding/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('iLanding/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('iLanding/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('iLanding/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('iLanding/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('iLanding/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('iLanding/assets/js/main.js')}}"></script>

</body>

</html>