<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SURAT BUKTI PENDAFTARAN</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container{
        width: 85%;
        margin: auto;
    }

    .header_surat{
        text-align: center;
        padding: 25px 20px;
    }

    .header_surat h3, h4{
        text-transform: uppercase;
    }

    .header_surat h3:nth-child(2){
        margin-top: 12px;
        color: blue;
    }

    .header_surat h4{
        margin-top: 5px;
        font-weight: 400;
    }

    .header_surat p{
        font-size: 13px;
    }

    hr{
        border: 2px solid black;
    }

    .title{
        background-color: limegreen;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        margin-top: 30px;
        color: white;
        padding: 5px
    }

    .table-data{
        margin-top: 30px
    }

    .table-data tr td{
        padding: 3px;
        font-size: 18px;
    }

    .info-table{
        width: 100%;
        border: 1px solid #c0c0c0;
        border-collapse: collapse;
        border-spacing: 0;
    }

    .info-table th, .info-table td{
        border: 1px solid #c0c0c0;
        padding: 7px 10px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .info-table th{
        background-color: limegreen;
        color: white;
    }

    .info-table td{
        background-color: #eeeded;
        text-align: center;
    }
</style>
<body>
    <div class="container">
        <header class="header_surat">
            <h3>panitia penerimaan pesrta didik baru</h3>
            <h3>smk samudra</h3>
            <h4>tahun ajaran 2025 / 2026</h3>
            <p style="margin: 8px 0px 5px 0px;">Alamat : Jl. Cisolok-Cipanas, Cisolok, Kec. Cisolok, Kabupaten Sukabumi Kode Pos 43366</p>
            <p>Telp : 0266 - 432522 Website: smksamudra.sch.id e-mail: info@smksamudra.sch.id</p>
        </header>
        <hr>
        <h3 class="title">BUKTI PENDAFTARAN PESERTA DIDIK BARU</h3>
        <table class="table-data">
            <tr>
                <td>No Pendaftaran</td>
                <td>:</td>
                <td>SAM0003</td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td style="text-transform: capitalize">{{$data->name}}</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td style="text-transform: capitalize">{{$data->date_birth}}</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>{{$data->gender}}</td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td>{{$data->school}}</td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>{{$data->major}}</td>
            </tr>
            <tr>
                <td>No. Telepnon</td>
                <td>:</td>
                <td>{{$data->no_wa}}</td>
            </tr>
            <tr>
                <td>Tanggal Daftar</td>
                <td>:</td>
                <td>{{$data->created_at}}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><strong>SUDAH REGISTRASI</strong></td>
            </tr>
        </table>

        <h5 style="text-align: center; margin: 15px 0px; font-size: 18px;">Info Panitia & Pendaftar </h5>

        <table class="info-table">
            <tr>
                <th>Panitia SPMB</th>
                <th></th>
                <th>Nama Pendaftar</th>
            </tr>
            <tr>
                <td>SMK SAMUDRA</td>
                <td></td>
                <td>{{$data->name}}</td>
            </tr>
        </table>
    </div>
</body>
</html>