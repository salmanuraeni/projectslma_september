
    @extends('template')
    @section('content')

    <div class="container pt-5" >
        <div class="row">

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

        <div class="row">
            <div class="col-12" style="width: 100vw">
                <table class="table">
                    <thead class="table">
                        <tr>
                            <th>No</th>
                            <th>NAMA</th>
                            <th>EMAIL</th>
                            <th>LEVEL</th>
                            <th>FOTO</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="table-white">
                        @foreach ($user as $key=>$item )
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->Level->nm_level}}</td>
                            <td><img src="{{ asset('storage/gambar/'.$item->gambar)}}" alt=""></td>
                            <td>
                                <a href="user/delete/{{$item->id}}" onclick="return window.confirm('yakin hapus data ini?')" class="btn btn-primary">Hapus</a>
                                <a href="user/edit/{{$item->id}}" class="btn" style="background-color: rgb(106, 255, 0);">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection

