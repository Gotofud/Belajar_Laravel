<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Barang;

class PostsController extends Controller
{
    public function menampilkan(){

    $post = Post::all();
    return view('tampil_post',compact('post'));
    }

    public function menampilkan2(){
        $barang = Barang::where('id', 3)->get();
    return view('tampil_barang',compact('barang'));
    }
}
