<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Pembeli;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();
        $pembeli = Pembeli::all();
        return view('transaksi.create', compact('buku','pembeli'));
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
            'jumlah' => 'required',
            'tanggal_transaksi' => 'required',
            'id_buku' => 'required',
            'id_pembeli' => 'required'
        ]);

        $transaksi = new Transaksi();
        $transaksi->jumlah = $request->jumlah;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->id_buku = $request->id_buku;
        $transaksi->id_pembeli = $request->id_pembeli;
        $transaksi->save();

        return redirect()->route('transaksi.index')->with('success', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $buku = Buku::all();
        $pembeli = Pembeli::all();
        return view('transaksi.show', compact('transaksi','buku','pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $buku = Buku::all();
        $pembeli = Pembeli::all();
        return view('transaksi.edit', compact('transaksi','buku','pembeli'));
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
            'jumlah' => 'required',
            'tanggal_transaksi' => 'required',
            'id_buku' => 'required',
            'id_pembeli' => 'required'
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->jumlah = $request->jumlah;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->id_buku = $request->id_buku;
        $transaksi->id_pembeli = $request->id_pembeli;
        $transaksi->save();

        return redirect()->route('transaksi.index')->with('success', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        
        return redirect()->route('transaksi.index')->with('success', 'Data berhasil di hapus');
    }
}
