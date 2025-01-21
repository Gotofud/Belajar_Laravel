<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_produk','harga','stok','id_kategori'];
    public $timestamp = true;

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

}
