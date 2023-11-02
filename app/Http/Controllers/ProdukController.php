<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function tambah(){
        return view('staff.crud.add', [
        'kategoris' => Kategori::all()
        ]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
        'id_produk' => 'required|string|max:20',
        'nama' => 'required|string',
        'harga' => 'required|string',
        'stok' => 'required|string',
        'ukuran' => 'required|string',
        'deskripsi' => 'required|string',
        'kategori_id' => 'required'
        ]);
        Produk::create($validateData);
        session()->flash('successedit', 'Berhasil Tambah Produk!');
        return redirect()->route('staff.produk_admin');
    }

    public function edit($id){
        return view('staff.crud.edit',[
        'produks' => Produk::all()->where('id', $id)->first(),
        'kategoris' => Kategori::all(),
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'id_produk' => 'required|string|max:20',
            'nama' => 'required|string',
            'harga' => 'required|string',
            'stok' => 'required|string',
            'ukuran' => 'required|string',
            'deskripsi' => 'required|string',
            'kategori_id' => 'required'
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update([
        'id_produk' => $request->id_produk,
        'nama' => $request->nama,
        'harga' => $request->harga,
        'stok' => $request->stok,
        'ukuran' => $request->ukuran,
        'deskripsi' => $request->deskripsi,
        'kategori_id' => $request->kategori_id,
        ]);
        session()->flash('successedit', 'Berhasil Edit Produk!');
        return redirect()->route('staff.produk_admin');
    }

    public function delete($id){
        $produk = Produk::findOrFail($id);
        $produk->delete();
        session()->flash('successhapus', 'Berhasil Hapus Produk!');
        return redirect()->route('staff.produk_admin');
    }
}
