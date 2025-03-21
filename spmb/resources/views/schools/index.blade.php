@extends('layout.master')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('spmb_admin/dist/css/manage_css/style.css')}}">
@endpush

@section('title')
    Halaman Daftar Sekolah
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
    <a href="/schools/create" class="btn btn-primary my-3"><i class="fas fa-plus"></i> Tambah</a>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr class="text-center">
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($schools as $row)
            <tr>
                <th scope="row" class="align-middle text-center">{{$loop->iteration}}</th>
                <td class="align-middle">{{$row->name}}</td>
                <td class="align-middle text-center">
                    <form action="/schools/{{$row->id}}" method="post" class="form-action">
                        @csrf
                        @method('delete')
                        <a href="/schools/{{$row->id}}/edit" class="btn btn-sm btn-warning text-white"><i class="fas fa-pencil"></i> Edit</a>
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau dihapus?');"><i class="fas fa-trash-can"></i> Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@push('scripts')
    <script src="{{asset('spmb_admin/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('spmb_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
    $(function() {
        $("#example1").DataTable();
    });
    </script>
@endpush