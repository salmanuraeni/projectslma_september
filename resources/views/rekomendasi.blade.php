<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>

    @extends('template')
    @section('content')

    <div style="margin-botton:500px ">
        <h3>Tambah Rekomendasi Game</h3>
        <div class="row">
            <div class="col-md-6">
                <a href="/user/create" class="btn btn-primary">Tambah Game</a>
            </div>
            <div class="col-md-6">
                <form action="/dashboard/search" method="post" class="">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="search" name="cari" id="" class="form-control" placeholder="search...">
                        <button class="btn btn-primary" type="submit">Go</button>
                    </div>
                </form>
            </div>
        </div>
        @if (Session::get('pesan'))
        {{ Session::get('pesan')}}
        @endif

        <table class="table" style="width:800px; height:100px;">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>NAMA</th>
                    <th>DESKRIPSI</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <body class="table-white">
                @foreach ($user as $key=>$item )
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->deskripsi}}</td>
                    <td>{{$item->Level->nm_level}}</td>
                    <td><img src="{{ asset('storage/gambar/'.$item->gambar)}}" alt=""></td>
                    <td>
                        <a href="user/delete/{{$item->id}}" onclick="return window.confirm('yakin hapus data ini?')" class="btn" style="background-color: red">Hapus</a>
                        <a href="dashboard/update/{{$item->id}}" class="btn" style="background-color: red">Edit</a>
                    </td>
                </tr>
                @endforeach
            </body>
        </table>
    </div>
</body>
</html>
