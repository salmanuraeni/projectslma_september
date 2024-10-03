<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #454a48">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" style="margin-left: 60%">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="GamesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Rekomendasi</a>
                <ul class="dropdown-menu" aria-labelledby="GamesDropdown">
                    <li><a class="dropdown-item" href="/game">Play Together</a></li>
                    <li><a class="dropdown-item" href="/robot">PK XD</a></li>
                    <li><a class="dropdown-item" href="/harta">Mobile Legends</a></li>
                    <li><a class="dropdown-item" href="/talking">My Talking Tom Friends</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Careers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/about">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a href="/" class="btn btn-dark text-white">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section>
        <div class="section-container-items">
            <img src="img/game1.webp" alt="" width="100%" height="80%" style="object-fit: cover;">
            <div class="container">
                <div class="row align-items-center h-100">
                    <div class="section col-md-6" style="margin-top: -70%;">
                        <h1 class="fw-bold mb-3" style=" color: #1a1a3d; font-size:8vh">Keseruan tanpa batas</h1>
                        <h4>The Very Best in Mobile Gaming</h4>
                        <img src="/img/apple store.webp" alt="">
                        <a href="https://play.google.com/store/games?device=windows"><img src="/img/play store.webp" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <section>
        <div class="container my-5">
            <h1 class="fw-bold" style="margin-top: 20px;">Rekomendasi Game</h1>
            <div class="row">
                @foreach ( $rekomendasi as $key => $item )
                <div class="col-md-3">
                    <div class="card" style="border-radius: 15px">
                            <img src="{{ asset('storage/gambar/'.$item->gambar)}}" style="border-radius: 15px; height:300px; object-fit:cover " class="card-img-top" alt="kipon">
                        </a>
                        <div  class=" text-center">
                            <a href="/game"><h5 class="card-title" style="font-weight: bold; margin-top:-70px;">{{$item->name}}</h5></a>
                            <p class="card-text text-white">{{$item->deskripsi}}</p>
                        </div>
                    </div>
                </div>

                @endforeach
                <div class="col-md-3">
                    <div class="card" style="border-radius: 15px">
                        <img src="img/unnamed (1).webp" style="border-radius: 15px; height:300px; object-fit:cover " class="card-img-top" alt="kipon">
                        <div  class=" text-center">
                            <a href="/robot"><h5 class="card-title text-white" style="font-weight: bold; margin-top:-70px;">PK XD</h5></a>
                            <p class="card-text text-white">Berisi iklan Pembelian dalam aplikasi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="border-radius: 15px">
                        <img src="img/mobile2.webp" style="border-radius: 15px; height:300px; object-fit:cover " class="card-img-top" alt="kipon">
                        <div class=" text-center">
                            <a href="/harta"><h5 class="card-title text-white" style="font-weight: bold; margin-top:-70px;">Mobile Legends</h5></a>
                            <p class="card-text text-white">Petualangan - Gratis</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="border-radius: 15px">
                        <img src="img/tom.webp" style="border-radius: 15px; height:300px; object-fit:cover " class="card-img-top" alt="kipon">
                        <div  class=" text-center">
                            <a href="/talking"><h5 class="card-title text-white" style="font-weight: bold; margin-top:-70px;">My Talking Tom Friends</h5></a>
                            <p class="card-text text-white">Berisi iklan Pembelian dalam aplikasi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="border-radius: 15px; margin-top:20px;">
                        <img src="img/super.webp" style="border-radius: 15px; height:300px; object-fit:cover " class="card-img-top" alt="kipon">
                        <div  class=" text-center">
                            <a href="/super"><h5 class="card-title text-white" style="font-weight: bold; margin-top:-70px;">Super Capybara Adventure</h5></a>
                            <p class="card-text text-white">GAME OFFLINE HAY</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <section>
      <div class="container text-center mt-5" >
        <h6 class="text-secondary">Tentang Game</h6>
        <h1 class="fw-bold mb-3" style=" color: #1a1a3d;">Sumber Hiburan Mobile <br> Untuk Anda</h1>
        <p class="text-muted mb-4">Saya paragraf. Klik untuk tambah teks Anda dan edit saya. Mudah.
          Klik “Edit Teks” <br> atau klik dua kali saya untuk tambah konten Anda & melakukan perubahan pada fon. <br>
          Saya tempat bagi Anda untuk berkisah & membuat para pengguna mengenal Anda.
        </p>
        <a href="/about" class="btn btn-danger px-4 py-2" style="background-color: #e63946; border:none; border-radius:10px;">Pelajari Selengkapnya</a>
      </div>
    </section>
    {{-- <section>
        <div class="container ">
            <h1 class="fw-bold">Kategori</h1>
            <div class="col-md-3" style="margin-left: 100px;">
                <div class="card" style="border-radius: 15px; margin-top:20px;">
                    <img src="img/super.webp" style="border-radius: 15px; height:300px; object-fit:cover " class="card-img-top" alt="kipon">
                    <div  class=" text-center">
                        <a href="/super"><h5 class="card-title text-white" style="font-weight: bold; margin-top:-70px;">Super Capybara Adventure</h5></a>
                        <p class="card-text text-white">GAME OFFLINE HAY</p>
                        <a href="gameanak"><p>Game Anak</p></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-top: -350px; margin-left:700px;">
                <div class="card" style="border-radius: 15px; ">
                    <img src="img/mobile2.webp" style="border-radius: 15px; height:300px; object-fit:cover " class="card-img-top" alt="kipon">
                    <div class=" text-center">
                        <a href="/harta"><h5 class="card-title text-white" style="font-weight: bold; margin-top:-70px;">Mobile Legends</h5></a>
                        <p class="card-text text-white">Petualangan - Gratis</p>
                        <a href="/gamedewasa"><p>Game Dewasa</p></a>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}
    <section>
        <div class="container my-5" style=" background-color: #f8f9fa; border-radius:15px; padding:20px;">
            <div class="row align-items-center">
                <div class="image-container" style="  border-radius:15px; padding:20px;">
                    <img src="img/game1.webp" alt="" style="border-radius:15px; padding:20px;  width: 100%; height:100%; object-fit:cover;">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container text-center mt-5">
            <h1 class="fw-bold mb-3" style=" color: #1a1a3d;">Game-Game Kami</h1>
            <p class="text-muted mb-4">Saya paragraf. Klik untuk tambah teks dan edit saya. Saya tempat untuk berkisah dan <br> membuat pengguna Anda mengenal Anda.</p>
        </div>
    </section>
    <section>
        <div class="background-section" style="background-image: url('img/c837a6_1cf50738638a41d680ed4dc3db5e5492~mv2.png'); background-size:cover; background-position:center; padding:50px 0; ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card-custom" style="background-color: #fff; border-radius:15px;  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding:20px; text-align:center;">
                            <img src="img/fotogame.webp" class="rounded-circle" alt="Kipon Icon" width="90" height="90" style=" object-fit:cover; ">
                            <h4>Play Together</h4>
                            <p>Casual - Gratis</p>
                            <p>
                                Saya paragraf. Klik untuk menambah teks Anda sendiri dan edit saya.
                                Saya tempat untuk berkisah dan membuat pengguna Anda mengenal Anda.
                            </p>
                            <div class="app-icons">
                                <a href="#"><img src="img/apple.png" alt=""></a>
                                <a href="https://play.google.com/store/apps/details?id=com.haegin.playtogether"><img src="img/play store.webp" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-custom" style=" background-color: #fff; border-radius:15px;  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding:20px; text-align:center;">
                            <img src="img/unnamed (1).webp" class="rounded-circle" alt="Kipon Icon" width="90" height="90" style=" object-fit:cover; ">
                            <h4>PK XD</h4>
                            <p>Berisi iklan Pembelian dalam aplikasi</p>
                            <p>
                                Saya paragraf. Klik untuk menambah teks Anda sendiri dan edit saya.
                                Saya tempat untuk berkisah dan membuat pengguna Anda mengenal Anda.
                            </p>
                            <div class="app-icons">
                                <a href="#"><img src="img/apple.png" alt=""></a>
                                <a href="https://play.google.com/store/apps/details?id=com.movile.playkids.pkxd"><img src="img/play store.webp" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-custom" style=" background-color: #fff; border-radius:15px;  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding:20px; text-align:center;">
                            <img src="img/mobile2.webp"  class="rounded-circle" alt="Kipon Icon" width="90" height="90" style=" object-fit:cover; ">
                            <h4>Mobile Legends</h4>
                            <p>RPG - Gratis</p>
                            <p>
                                Saya paragraf. Klik untuk menambah teks Anda sendiri dan edit saya.
                                Saya tempat untuk berkisah dan membuat pengguna Anda mengenal Anda.
                            </p>
                            <div class="app-icons">
                                <a href="#"><img src="img/apple.png" alt=""></a>
                                <a href="https://play.google.com/store/apps/details?id=com.mobile.legends"><img src="img/play store.webp" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-custom" style=" background-color: #fff; border-radius:15px;  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding:20px; text-align:center;">
                            <img src="img/tom.webp"  class="rounded-circle" alt="Kipon Icon" width="90" height="90" style=" object-fit:cover; ">
                            <h4>My Talking Tom Friends</h4>
                            <p>RPG - Gratis</p>
                            <p>
                                Saya paragraf. Klik untuk menambah teks Anda sendiri dan edit saya.
                                Saya tempat untuk berkisah dan membuat pengguna Anda mengenal Anda.
                            </p>
                            <div class="app-icons">
                                <a href="#"><img src="img/apple.png" alt=""></a>
                                <a href="https://play.google.com/store/apps/details?id=com.outfit7.mytalkingtomfriends"><img src="img/play store.webp" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-custom" style=" background-color: #fff; border-radius:15px;  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding:20px; text-align:center;">
                            <img src="img/super.webp"  class="rounded-circle" alt="Kipon Icon" width="90" height="90" style=" object-fit:cover; ">
                            <h4>Super Capybara Adventure</h4>
                            <p>GAME OFFLINE HAY</p>
                            <p>
                                Saya paragraf. Klik untuk menambah teks Anda sendiri dan edit saya.
                                Saya tempat untuk berkisah dan membuat pengguna Anda mengenal Anda.
                            </p>
                            <div class="app-icons">
                                <a href="#"><img src="img/apple.png" alt=""></a>
                                <a href="https://play.google.com/store/apps/details?id=game.capybara.adventure&hl=id"><img src="img/play store.webp" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <section>
            <div class="container-fluid" style="background-color: #f8f9fa">
                <div class="container">
                    <div class="row">
                        <div class="container text-center">
                            <h3 class="mb-3" style="color: #1a1a3d;">Pengalaman Game Imersif</h3>
                            <p>___________________________________________________________________________________________________________________________________________________________</p>
                        </div>
                        <div class="col-md-3 mb-4 text-dark">
                            <h4>Kontak</h4>
                            <p>Info@situssaya.com</p>
                            <p>Telp: 021-3867613</p>
                            <p>Jl Taman Suropati, Menteng</p>
                            <p>Jakarta 10310, Indonesia</p>
                        </div>
                        <div class="col-md-3 mb-4 text-dark">
                            <h4>Navigasi</h4>
                            <p>Game</p>
                            <p>Karir</p>
                            <p>Tentang</p>
                            <p>Kontak</p>
                            <p>Kebijakan Privasi</p>
                            <p>Syarat & Ketentuan</p>
                        </div>
                        <div class="col-md-3 mb-4 text">
                            <h4>Sosial</h4>
                            <p>Discord</p>
                            <p>Twitch</p>
                            <p>Facebook</p>
                            <p>Youtube</p>
                            <p>Twitter</p>
                            <p>LinkedIn</p>
                        </div>
                        <div class="col-md-3 mb-4 text-dark">
                            <h4>Temukan kami Di</h4>
                            <a href=""><img src="img/Gaming Company Website Template _ WIX_files/apple.png" alt=""></a>
                            <a href="https://play.google.com/store/games?device=windows"><img src="img/Gaming Company Website Template _ WIX_files/Google.png" alt="" style="margin-top: 25px; margin-top: -2px;"></a>
                        </div>
                        <div class="container text-center">
                            <p>_______________________________________________________________________________________________________________________________________________________________</p>
                        </div>
                        <div class="container text-center">
                            <p>
                                © 2035 oleh Tripo. Dibuat dengan Wix.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>
