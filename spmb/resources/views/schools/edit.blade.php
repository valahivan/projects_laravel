@extends('layout.master')

@section('title')
    Halaman Edit Data Sekolah
@endsection

@section('content')
    @if (session()->has('warning'))
    <div class="alert alert-warning alert-dismissible fade show text-white" role="alert">
        {{session()->get('warning')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <form action="/schools/{{$school->id}}" method="POST">
        @csrf
        @method('put')
        @error('name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="form-group">
            <label for="name">Nama Sekolah :</label>
            <input type="text" class="form-control" name="name" id="name" autocomplete="off" value="{{$school->name}}">
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-pencil"></i> Ubah Sekarang</button>
        <a href="/schools" class="btn btn-secondary"><i class="fas fa-arrow-right-from-bracket"></i> Kembali</a>
    </form>
@endsection