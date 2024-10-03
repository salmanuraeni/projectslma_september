<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;

class KategoriController extends Controller
{
    public function tampil(){
        $data['kategori'] = Kategori::all();
        return view('kategori', $data);
    }
}
