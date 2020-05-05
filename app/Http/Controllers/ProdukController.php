<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProdukController extends Controller
{
    public function index()
    {
        return view('produk');
    }

    public function create(){
        return view('form-produk');
    }

    public function store(Request $request)
    {
        $dataValid = $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga' => ' required|numeric',
            'stok' => 'required|numeric',
            'kondisi' => 'required|in:Y,N',
            'deskripsi' => 'required'],
            
                [
                    'nama_produk.required' => 'Nama produk harus diisi',
                    'kategori.required' => 'Kategori harus diisi',
                    'harga.required' => 'Harga harus diisi',
                    'harga.numeric' => 'Harga harus berupa angka',
                    'stok.required' => 'Kategori harus diisi',
                    'stok.numeric' => 'Stok harus berupa angka',
                    'kondisi.required' => 'Kondisi harus diisi',
                    'kondisi.in' => 'Kondisi hanya baru dan bekas',
                    'deskripsi.require' => 'Deskripsi harus diisi'
                ]);
        Product::create($dataValid);
        return "Data Produk Berhasil Disimpan";
    }

    public function show() {

    }
}
