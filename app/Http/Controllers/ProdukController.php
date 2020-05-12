<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Product::all();
        return view('index',['produk' => $produk]);
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
        
        session()->flash('success', 'Data Berhasil Disimpan');

        return redirect('/list-produk');
    }

    public function show($produk) 
    {
        $result = Product::find($produk);
        return view('detail-produk', ['produk' => $result]);
    }

    public function edit($produk)
    {
        $result = Product::find($produk);
        return view('edit-produk', ['produk' => $result]);
    }

    public function update(Request $request)
    {
        $dataValid = $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga' => ' required|numeric',
            'stok' => 'required|numeric',
            'kondisi' => 'required|in:Y,N',
            'deskripsi' => 'required',
            ]);
        Product::where('id', $request->id)->update($dataValid);

        session()->flash('success', 'Data Berhasil Diubah');

        return redirect('/list-produk');
    }

    public function delete($produk)
    {
        $result = Product::find($produk);
        $result->delete();

        session()->flash('success', 'Data Berhasil Dihapus');

        return redirect('/list-produk');
    }
}
