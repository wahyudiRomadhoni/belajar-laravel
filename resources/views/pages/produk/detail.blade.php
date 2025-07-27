@extends('layout.master')

@section('konten')
<h1>Detail Product</h1>
<hr>
<div class="card">
    <div class="card-header">
        detail product
    </div>
    <div class="card-body">
        <img src="https://placehold.co/600x400" class="img-fluid" alt="...">
        <p>Nama Produk : {{$produk -> nama_produk}}</p>
        <p>Harga : Rp.{{$produk -> harga}}</p>
        <p>Deskripsi : {{$produk -> deskripsi_produk}}</p>
        <p>Kategori : Barang elektronik </p>
        <p>Stok : Tersedia 3</p>
        <a href="/product" class="btn btn-primary">Kembali ke produk</button>
    </div>
</div>
@endsection