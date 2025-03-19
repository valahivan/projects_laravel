@extends('layout.master')

@section('title')
    Halaman Tambah Jurusan
@endsection

@section('content')
    <form action="/majors" method="POST">
        @csrf
        @error('name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="form-group">
            <label for="name">Nama Jurusan :</label>
            <input type="text" class="form-control" name="name" id="name" autocomplete="off" value="{{old('name')}}">
        </div>
        @error('description')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="form-group">
            <label for="description">Deskripsi Jurusan :</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambahkan</button>
        <a href="/majors" class="btn btn-secondary"><i class="fas fa-arrow-right-from-bracket"></i> Kembali</a>
    </form>
@endsection