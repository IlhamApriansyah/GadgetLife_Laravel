@extends('layouts.inc.front')

@section('title')
    Produk 
@endsection

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
    </div>
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Produk </h2>
                        <div class="row">
                        @foreach ($product as $prod)
                        <div class="col-md-4">
                            <a href="{{ url('view-product/'.$prod->nama) }}">
                            <div class="card">
                                <div class="card-body">
                                    <h5>{{$prod->nama}}</h5>
                                    <small>{{$prod->harga}}</small>
                                </div>
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