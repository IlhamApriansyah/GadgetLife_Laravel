@extends('layouts.inc.front')

@section('title')
    {{ $product->nama }}
@endsection

@section('content')

    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">Koleksi / {{ $product->nama }}</h6>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $product->nama }}</h2>
                    @foreach ($products as $prod)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <a href="{{ url('product/'.$prod->nama)}}">
                            <img src="{{ asset('assets/uploads/products/'.$prod->image)}}" alt="Gambar Produk">
                            <div class="card-body">
                                <h5>{{ $prod->nama }}</h5>
                                <span class="float-end">{{ $prod->ulasan}}</span>
                            </div>
                        </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection