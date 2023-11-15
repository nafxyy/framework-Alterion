<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProdukController extends Controller
{
    public function tambah()
    {
        return view('staff.crud.add', [
            'kategoris' => Kategori::all()
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id_produk' => 'required|string|max:20',
            'nama' => 'required|string',
            'harga' => 'required|string',
            'stok' => 'required|string',
            'ukuran' => 'required|string',
            'deskripsi' => 'required|string',
            'kategori_id' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            // Menambah validasi untuk gambar
        ]);

        // Simpan gambar ke folder 'public/images/produk_add'
        $gambarPath = $request->file('gambar')->store('images','public');

        $validateData['gambar'] = $gambarPath;

        Produk::create($validateData);

        session()->flash('successedit', 'Berhasil Tambah Produk!');
        return redirect()->route('staff.produk_admin');
    }


    public function edit($id)
    {
        return view('staff.crud.edit', [
            'produks' => Produk::all()->where('id', $id)->first(),
            'kategoris' => Kategori::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_produk' => 'required|string|max:20',
            'nama' => 'required|string',
            'harga' => 'required|string',
            'stok' => 'required|string',
            'ukuran' => 'required|string',
            'deskripsi' => 'required|string',
            'kategori_id' => 'required',
            'gambar' => 'required|string'
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
            'gambar' => $request->gambar,
        ]);
        session()->flash('successedit', 'Berhasil Edit Produk!');
        return redirect()->route('staff.produk_admin');
    }

    public function delete($id)
    {
        $produk = Produk::findOrFail($id);
        Storage::delete('public/images/'.$produk->gambar);
        $produk->delete();
        session()->flash('successhapus', 'Berhasil Hapus Produk!');
        return redirect()->route('staff.produk_admin');
    }

    public function download_excel()
    {
        // Retrieve data from the database
        $produks = Produk::all();

        // Generate Excel content
        $content = "ID Produk\tNama\tHarga\tStok\tUkuran\tDeskripsi\tKategori ID\tGambar\n";

        foreach ($produks as $produk) {
            $content .= "{$produk->id_produk}\t{$produk->nama}\t{$produk->harga}\t{$produk->stok}\t{$produk->ukuran}\t{$produk->deskripsi}\t{$produk->kategori_id}\t{$produk->gambar}\n";
        }

        // Set headers for download
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=produk_data.xls");
        header("Pragma: no-cache");
        header("Expires: 0");

        // Output content to the browser
        echo $content;
        exit;
    }
}
