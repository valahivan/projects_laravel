@extends('layout.master')

@push('styles')
    <link rel="stylesheet" href="{{asset('spmb_admin/dist/css/manage_css/style.css')}}">
@endpush

@section('title')
    Halaman Cek Data Siswa
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
   @guest
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Informasi !!</strong> Silahkan cek nama kamu dikolom pencarian. kamu juga bisa download <strong>BUKTI PENDAFTARAN</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
   @endguest
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr class="text-center text-uppercase">
                <th>Nama Lengkap</th>
                <th>Gender</th>
                <th>Asal Sekolah</th>
                <th>Jurusan</th>
                @auth
                    <th>Action</th>
                @endauth
                @guest
                    <th>Download</th>
                @endguest
            </tr>
        </thead>
        <tbody>
         @foreach ($students as $row)
            <tr class="text-uppercase">
                <td class="align-middle">{{$row->name}}</td>
                <td class="align-middle">{{$row->gender}}</td>
                <td class="align-middle">{{$row->school}}</td>
                <td class="align-middle">{{$row->major}}</td>
                <td class="align-middle text-center">
                    <form action="/students/{{$row->id}}" method="post">
                        @csrf
                        @method('delete')
                        @auth
                        <button type="submit" class="btn btn-danger font-weight-bold" onclick="return confirm('Yakin mau dihapus?')"><i class="fas fa-trash-can"></i> DELETE</button>
                        @endauth
                        @guest
                            <a href="/students/downloadSurat/{{$row->id}}" class="btn btn-primary font-weight-bold" target="_blank"><i class="fas fa-download"></i> DOWNLOAD BUKTI DAFTAR</a>
                        @endguest
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@push('scripts')
    <script src="{{asset('spmb_admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('spmb_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('spmb_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('spmb_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('spmb_admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('spmb_admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('spmb_admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('spmb_admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>

    <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
    </script>
@endpush