@extends('layouts.inc.front')

@section('title', $products->nama)

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">Koleksi / Elektronik / {{ $products->nama }}</h6>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{ asset('assets/uploads/products/'.$products->image) }}" class="w-100">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{ $products->nama}}
                        </h2>

                        <hr>
                        <label class="me-3">Harga : Rp {{ $products->harga}}</label>
        <p class="mt-3">
            {!! $products->deskripsi !!}
        </p>
        @if ($products->min_pesanan > 0)
            <label for="badge bg-success"> Masih ada stok </label>
        @else
            <label for="badge bg-danger"> Stok habis </label>
        @endif
        <div class="row-mt-2">
            <div class="col-md-2">
                <label for="Jumlah"> Stok barang </label>
                <div class="input-group text-center mb-3">
                    <span class="input-group-text">-</span>
                    <input type="text" name="Jumlah" value="0" class="form-control">
                    <span class="input-group-text">+</span>
                </div>
            </div>
            <div class="col-md-10">
                <br/>
                <button type="button" class="btn btn-success me-3 float-start">Tambahkan ke wishlist <i class="fa fa-heart"></i></button>
                <button type="button" class="btn btn-primary me-3 float-start">Tambahkan ke keranjang <i class="fa fa-heart"></i></button>
            </div>
        </div>
        </div>  
        </div>
        </div>
    </div>
</div>

@endsection