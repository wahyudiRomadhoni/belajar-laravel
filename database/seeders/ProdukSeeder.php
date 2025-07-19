<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // query untuk menambah data
        DB::table('tb_produk')->insert([
            [
            
            'nama_produk'=>'Huawei Smart fit 3',
            'harga'=>'1500000',
            'deskripsi_produk'=>'ini adalah smartwatch',
            'kategori_id'=>'2',
            'created_at'=>now(),
        ],[
            'nama_produk'=>'Smartwatch Apple watch series 9',
            'harga'=>'6500000',
            'deskripsi_produk'=>'ini adalah smartwatch',
            'kategori_id'=>'2',
            'created_at'=>now(),
        ],[
            'nama_produk'=>'Huawei Smart fit 4',
            'harga'=>'3500000',
            'deskripsi_produk'=>'ini adalah smartwatch',
            'kategori_id'=>'2',
            'created_at'=>now(),
        
        ]
        ]);
    }
}
