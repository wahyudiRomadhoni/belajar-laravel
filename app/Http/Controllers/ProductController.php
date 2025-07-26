<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $toko = [
            'nama_toko' => 'Yudi Jaya Selalu',
            'alamat' => 'Pamekasan, Mexico',
            'type' => 'Ruko Bintang 5',
        ];
        $produk = produk::get(); //query untuk mengambil semua data yang berada di tb_produk
        // $queryBuilder = DB::table('tb_produk')->get();
        return view('pages.produk.show', [
            'data_toko' => $toko,
            'data_produk' => $produk,
        ]);
    }

    public function create()
    {
        return view('pages.produk.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'deskripsi' => 'required',
        ]);

        // untuk menambahkan data ke dalam database

        produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi,
            'kategori_id' => '1'
        ]);

        // setelah data berhasil di tambah maka akan mengarah ke halaman /product dan memberikan notif berhasil menambahkan data
        return redirect('/product')->with('message', 'berhasil menambahkan data');
    }
}
