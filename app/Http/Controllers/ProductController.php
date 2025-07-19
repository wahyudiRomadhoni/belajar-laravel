<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $toko = [
            'nama_toko' => 'Yudi Jaya Selalu',
            'alamat' => 'Pamekasan, Mexico',
            'type' => 'Ruko Bintang 5',
        ];
        $produk = produk::get(); //query untuk mengambil semua data yang berada di tb_produk
        // $queryBuilder = DB::table('tb_produk')->get();
        return view('pages.produk.show', [
            'data_toko'=>$toko,
            'data_produk'=>$produk,
        ]);
    }

    public function TambahProduct() {
        return view('pages.addProduct');
    }
}
