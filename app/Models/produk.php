<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
     // inisialisasi tabel product
    protected $table = 'tb_produk';

    // inisialisasi primary key di dalam tabel
    protected $primaryKey = 'id_produk';

    // inisialisasi data yang dapat kita isi
    // protected $fillable = ['nama_product', 'harga', 'stok'];

    // inisialisasi data yang tidak boleh kita isi
    protected $guarded = ['id_produk'];

}
