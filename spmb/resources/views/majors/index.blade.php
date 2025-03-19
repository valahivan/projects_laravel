@extends('layout.master')

@section('title')
    Halaman Data Jurusan
@endsection

@section('content')
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session()->get('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <a href="/majors/create" class="btn btn-primary my-3"><i class="fas fa-plus"></i> Tambah</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($majors as $row)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$row->name}}</td>
                <td>
                    <form action="/majors/{{$row->id}}" method="post">
                        @csrf
                        @method('delete')
                        <a href="/majors/{{$row->id}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> Detail</a>
                        <a href="/majors/{{$row->id}}/edit" class="btn btn-sm btn-warning text-white"><i class="fas fa-pencil"></i> Edit</a>
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau dihapus?');"><i class="fas fa-trash-can"></i> Delete</button>
                    </form>
                </td>
            </tr>
            @empty
                <th scope="col" class="my-5">Tidak ada data jurusan!</th>
            @endforelse
        </tbody>
    </table>
@endsection