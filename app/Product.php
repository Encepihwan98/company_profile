<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nama_produk', 'deskripsi', 'harga', 'foto'
    ];
}
