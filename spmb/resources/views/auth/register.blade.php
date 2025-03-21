<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halama Registrasi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('spmb_admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('spmb_admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('spmb_admin/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card-register bg-white shadow rounded">
    <div class="card-header bg-info">
      <h4 class="ml-1">Regsiter a new membership</h4>
    </div>
    <div class="card-body">
      <form action="{{route('register')}}" method="post">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
               </ul>
            </div>
        @endif
        <label for="name" class="form-label text-secondary">Username :</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" placeholder="Username" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <label for="name" class="form-label text-secondary">Email :</label>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <label for="password" class="form-label text-secondary">Password :</label>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <label for="confirm" class="form-label text-secondary">Confirm Password :</label>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <p class="text-center text-dark my-3">Already you have an account? <a href="/login" class="text-dark"><b>Login</b></a></p>
        <button type="submit" class="btn btn-block btn-info">Sign-Up</button>
      </form>
    </div>
    <footer class="bg-light p-3 text-center rounded-bottom">
        <strong>Copy Right &copy; 2025 | SMK SAMUDRA</strong>
    </footer>
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('spmb_admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('spmb_admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('spmb_admin/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
