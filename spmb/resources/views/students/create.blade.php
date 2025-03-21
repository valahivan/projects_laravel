<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Pendaftaran</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{asset('image/logo smk samudra.png')}}" rel="icon">
    <link href="{{asset('iLanding/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('spmb_admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('spmb_admin/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('spmb_admin/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('spmb_admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
</head>
<body class="body-form">
    <div class="container container-form px-4">
        <div class="form-box col-lg-5 col-10 shadow rounded p-3 bg-white">
            <header class="d-flex justify-content-center pb-3">
                <img src="{{asset('image/logo smk samudra.png')}}" alt="logo" width="78px">
            </header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand font-weight-bold" href="#">SMK SAMUDRA</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link text-dark" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="/students">Cek Nama</a>
                    </li>
                  </ul>
                </div>
            </nav>
            <h5 class="text-center text-secondary font-weight-bold my-3">FORM DAFTAR SISWA</h5>
            <form action="/students" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="NAMA LENGKAP" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text bg-white"><i class="fas fa-user"></i></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="place_birth" class="form-control" placeholder="TEMPAT LAHIR (Contoh : Sukabumi)" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text bg-white"><i class="fas fa-home"></i></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="date_birth" class="form-control" placeholder="TANGGAL LAHIR (Contoh : 06112007)" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text bg-white"><i class="fas fa-calendar"></i></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <select name="gender" class="form-control select2bs4" required>
                      <option value="" selected="selected">JENIS KELAMIN</option>
                      <option value="Laki-Laki">LAKI-LAKI</option>
                      <option value="Perempuan">PEREMPUAN</option>
                    </select>
                    <div class="input-group-append">
                        <span class="input-group-text bg-white"><i class="fas fa-user"></i></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <select name="school_id" class="form-control select2bs4" required>
                      <option value="" selected="selected">ASAL SEKOLAH</option>
                      @forelse ($schools as $school)
                          <option value="{{$school->id}}">{{$school->name}}</option>
                      @empty
                          <option value="">Belum Ada Daftar Sekolah</option>
                      @endforelse
                    </select>
                    <div class="input-group-append">
                        <span class="input-group-text bg-white"><i class="fas fa-university"></i></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <select name="major_id" class="form-control select2bs4" required>
                      <option value="" selected="selected">PILIH JURUSAN</option>
                      @forelse ($majors as $major)
                          <option value="{{$major->id}}">{{$major->name}}</option>
                      @empty
                          <option value="">Belum Ada Daftar Jurusan</option>
                      @endforelse
                    </select>
                    <div class="input-group-append">
                        <span class="input-group-text bg-white"><i class="fas fa-school"></i></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="no_wa" class="form-control" placeholder="NO HANDPHONE / WA" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text bg-white"><i class="fas fa-phone"></i></span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">DAFTAR SEKARANG</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="{{asset('spmb_admin/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('spmb_admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $('.select2').select2()

        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })
    </script>
</body>
</html>
@if (session()->has('success'))
<script>
    swal({
        title: "Berhasil !!",
        text: "Data kamu sudah terdaftar. Silahkan cek nama kamu!",
        icon: "success",
    });
</script>
@endif