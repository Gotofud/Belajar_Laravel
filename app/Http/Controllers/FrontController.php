<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class FrontController extends Controller
{
    public function index (){
        $produk = Produk::all();
        return view('welcome', compact('produk'));
    }

    public function show($id)
    {
        $produk = Produk::with('kategori')->findOrFail($id); // Produk utama
        $related = Produk::where('id', '!=', $id)->inRandomOrder()->take(4)->get(); // Produk lain
    
        return view('front.show', compact('produk', 'related'));
    }
    

}
