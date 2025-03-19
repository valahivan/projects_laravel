@extends('layout.master')

@section('title')
    Halaman Data Jurusan
@endsection

@section('content')
    <a href="/majors" class="btn btn-secondary my-3"><i class="fas fa-arrow-right-from-bracket"></i> Kembali</a>
    <h1 class="text-dark my-3">{{$major->name}}</h1>
    <p class="text-justify">{{$major->description}}</p>
@endsection