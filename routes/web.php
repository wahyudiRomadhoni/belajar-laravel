<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function (){
    return view('pages.about', [
        'nama' => 'nurul istiqmala',
        'umur' => '21',
        'alamat' => 'pamekasan',
    ]);
});


Route::view('/contact', 'pages.contact');

// satu controller bisa menyimpan banyak method
Route::get('/product', [ProductController::class,'index']); //ini untuk read data (menampilkan data)

Route::get('/product/tambah', [ProductController::class,'TambahProduct']);
