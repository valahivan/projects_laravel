@extends('layout.master')

@section('title')
    Halaman Tambah Sekolah
@endsection

@section('content')
    <form action="/schools" method="POST">
        @csrf
        @error('name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="form-group">
            <label for="name">Nama Sekolah :</label>
            <input type="text" class="form-control" name="name" id="name" autocomplete="off" value="{{old('name')}}">
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambahkan</button>
        <a href="/schools" class="btn btn-secondary"><i class="fas fa-arrow-right-from-bracket"></i> Kembali</a>
    </form>
@endsection