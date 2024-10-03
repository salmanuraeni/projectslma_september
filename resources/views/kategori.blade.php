<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('template')
    @section('content')

    <div style="margin-bottom: 500px">
        <h3>kategori</h3>
        <div class="row">
            <div class="col-md-6">
                <a href="" class="btn btn-primary">Tambah</a>
            </div>
            <div class="col-md-6">
                <form action="/kategori" method="post" class="">
                    <div class="input-group mb-3">
                        <input type="search" name="cari" id="" class="form-control" placeholder="search...">
                        <button class="btn btn-primary" type="submit">Go</button>
                    </div>
                </form>
            </div>
        </div>
        @if (Session::get('pesan'))
            {{Session::get('pesan')}}
        @endif
        <table class="table" style="width: 800px; height:100px">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>NAMA KATEGORI</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody class="table-white">
                @foreach ($kategori as $key => $item )
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->nm_kategori}}</td>
                        <td>
                            <a href="" onclick="return window.confirm('yakin hapus data ini?')" class="btn btn-danger" onclick="return window.confirm('yakin hapus data ini?')">Hapus</a>
                            <a href="" class="btn" style="background-color: red">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
