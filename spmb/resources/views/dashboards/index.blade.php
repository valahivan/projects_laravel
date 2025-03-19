@extends('layout.master')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="row justify-content-between">
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$jurusan}}</h3>

          <p>Jumlah Jurusan</p>
        </div>
        <div class="icon">
          <i class="fas fa-university"></i>
        </div>
        <a href="/majors" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{$sekolah}}</h3>

          <p>Jumlah Sekolah</p>
        </div>
        <div class="icon">
          <i class="fas fa-school"></i>
        </div>
        <a href="schools" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{$siswa}}</h3>

          <p>Jumlah Siswa</p>
        </div>
        <div class="icon">
          <i class="fas fa-users"></i>
        </div>
        <a href="students" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
@endsection