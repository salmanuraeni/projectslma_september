<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kategori;
use App\Models\Level;
use App\Models\Rekomendasi;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Level::create([
            'nm_level'=>'admin'
        ]);

        Level::create([
            'nm_level'=>'user'
        ]);

        Kategori::create([
            'nm_kategori'=> 'Anak-anak'
        ]);

        Kategori::create([
            'nm_kategori'=> 'Dewasa'
        ]);

        User::create([
            'name'=> 'slma',
            'email' =>'salmanur@gmail.com',
            'password' =>bcrypt('12345'),
            'levels_id' => 2
        ]);

        User::create([
            'name'=> 'nur',
            'email' =>'nur@gmail.com',
            'password' =>bcrypt('123'),
            'levels_id' => 1
        ]);

        Rekomendasi::create([
            'name'=>'zepeto',
            'deskripsi'=> 'petualangan-gratis',
            'gambar'=>''
        ]);

    }
}
