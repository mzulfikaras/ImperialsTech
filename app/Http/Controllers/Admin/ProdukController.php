<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index(){
        $dataProduk = Produk::all();
        return view('admin.pages.produk.index', compact('dataProduk'));
    }

    public function create(){
        return view('admin.pages.produk.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'images' => 'required|image|mimes:png,jpg,jpeg',
            'nama_produk' => 'required',
            'deskripsi' => 'required'
        ]);

        $validateData['images'] = $request->file('images')->store('assets/admin/produk','public');

        Produk::create($validateData);
        $request->session()->flash('pesan' , "Product Berhasil Ditambahkan");
        return redirect()->route('produk.index');
    }

    public function edit(Produk $produk){
        return view('admin.pages.produk.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk){
        $produkId = $produk->find($produk->id);

        $validateData = $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required'
        ]);

        if($request->images){
            Storage::delete('public/'.$produkId->images);
            $validateData['images'] = $request->file('images')->store('assets/admin/produk','public');
        }

        $produk->update($validateData);
        $request->session()->flash('pesan' , "Product Berhasil Diupdate");
        return redirect()->route('produk.index');
    }

    public function destroy(Produk $produk){
        $produkId = $produk->find($produk->id);

        Storage::delete('public/'.$produkId->images);
        $produk->delete();

        return redirect()->route('produk.index')->with('hapus', "Hapus Data Berhasil");;
    }
}
