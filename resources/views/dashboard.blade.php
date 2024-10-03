

    @extends('template')
    @section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-left: 400px;">
                <form action="/dashboard/search" method="post" class="">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="search" name="cari" id="" class="form-control" placeholder="search...">
                        <button class="btn btn-primary" type="submit">Go</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container pt-5">
            @if (Session::has('pesan'))
            <div class="alert alert-succes">{{ Session::get('pesan')}}</div>
            @endif
        </div>

        <table class="table" style="width:1300px; height:100px;">
            <thead class="table" >
                <tr>
                    <th>No</th>
                    <th>NAMA</th>
                    <th>DESKRIPSI</th>
                    <th>FOTO</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <body class="table-white">
                @foreach ($rekomendasi as $key=>$item )
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->deskripsi}}</td>
                    <td><img src="{{ asset('storage/gambar/'.$item->gambar)}}" alt="" style="width: 130px; height: 80 px;"></td>
                    <td>
                        <a href="dashboard/delete/{{$item->id}}" onclick="return window.confirm('yakin hapus data ini?')" class="btn btn-primary" style="width:150px;">Hapus</a>
                        <a href="dashboard/update/{{$item->id}}" class="btn" style="background-color: rgb(106, 255, 0); width:150px;">Edit</a>
                    </td>
                </tr>
                @endforeach
            </body>
        </table>
    </div>
    @endsection



