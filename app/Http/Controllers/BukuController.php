<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Genre;
use App\Models\Penerbit;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::all();
        $penerbit = Penerbit::all();
        return view('buku.create', compact('genre','penerbit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_buku' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'id_genre' => 'required',
            'id_penerbit' => 'required',
            'tanggal_terbit' => 'required',
            'image' => 'required'
        ]);

        $buku = new Buku;
        $buku->nama_buku = $request->nama_buku;
        $buku->harga = $request->harga;
        $buku->stok = $request->stok;
        $buku->id_genre = $request->id_genre;
        $buku->id_penerbit = $request->id_penerbit;
        $buku->tanggal_terbit = $request->tanggal_terbit;

        if($request->hasFile('image')){
            $img = $request->file('image');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/buku', $name);
            $buku->image = $name;
        }

        $buku->save();

        return redirect()->route('buku.index')->with('success', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        $genre = Genre::all();
        $penerbit = Penerbit::all();
        return view('buku.show', compact('buku','genre','penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $genre = Genre::all();
        $penerbit = Penerbit::all();
        return view('buku.edit', compact('buku','genre','penerbit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_buku' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'id_genre' => 'required',
            'id_penerbit' => 'required',
            'tanggal_terbit' => 'required',
            'image' => 'required'
        ]);

        $buku = Buku::findOrFail($id);
        $buku->nama_buku = $request->nama_buku;
        $buku->harga = $request->harga;
        $buku->stok = $request->stok;
        $buku->id_genre = $request->id_genre;
        $buku->id_penerbit = $request->id_penerbit;
        $buku->tanggal_terbit = $request->tanggal_terbit;

        if ($request->hasFile('image')) {
            $buku->deleteImage();
            $img = $request->file('image');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $img->move('images/buku', $name);
    
            $buku->image = $name;
        } else {

            $buku->image = null;
        }

        $buku->save();

        return redirect()->route('buku.index')->with('success', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        
        return redirect()->route('buku.index')->with('success', 'Data berhasil di hapus');
    }
}
