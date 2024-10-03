<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    public function rekomendasi(){
        return $this->hasMany(Rekomendasi::class, 'kategoris_id', 'id');
    }
}
