<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dashboard extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'nama_produk',
        'kode_produk',
        'kategori',
        'harga',
        'stok',
    ];
}
