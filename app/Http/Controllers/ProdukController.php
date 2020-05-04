<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('produk');
    }

    public function simpanProduk(Request $request)
    {
        $dataValid = $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga' => ' required|numeric',
            'stok' => 'required|numeric',
            'kondisi' => 'required|in:Y,N',
            'deskripsi' => 'required',
        ]);
    }
}
