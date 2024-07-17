<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'harga',
        'kategori_id',
        'stok',
        'kode_produk',
        'warna',
        'deskripsi',
        'gambar',
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
