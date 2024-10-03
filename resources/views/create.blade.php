
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstra/css/bootstrap.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark " style="background-color: rgb(224, 167, 177)">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Game</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @if (Session::has('pesan'))
        <div class="alert alert-succes">{{ Session::get('pesan')}}</div>
    @endif
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center" style="background-color: rgb(224, 167, 177)">
                        Form Rekomendasi Game
                    </div>
                    <div class="card-body">
                        <form action="/dasboard/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group pt-2">
                                <label for="productName">Nama Game</label>
                                <input type="text" name="name" class="form-control" id="productName" placeholder="Masukkan nama rekomendasi">
                            </div>
                            {{-- <div class="form-group pt-2">
                                <label for="category">Kategori</label>
                                <input type="text" name="kategori" class="form-control" id="category" placeholder="Masukkan kategori produk" >
                            </div> --}}
                            <div class="form-group pt-2">
                                <label for="price">Deskirpsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="price" placeholder="Masukkan deskripsi">
                            </div>
                            <div class="form-group pt-2">
                                <label for="image">Gambar</label>
                                <input type="file" name="gambar" class="form-control-file" id="image">
                            </div>
                            <input type="submit" class="btn w-100 btn-block mt-5" style="background-color: rgb(224, 167, 177)">SIMPAN</input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<script src="bootstrap/js/bootstrap.min.js"></script>
