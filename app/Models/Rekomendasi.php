<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategoris_id');
    }
}
