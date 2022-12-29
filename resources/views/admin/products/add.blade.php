@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Add Product</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-products')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for=""> Harga </label>
                        <input type="text" class="form-control" name="harga">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for=""> Nama </label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for=""> Kondisi </label>
                        <input type="text" class="form-control" name="kondisi">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for=""> Minimal Pesanan </label>
                        <input type="text" class="form-control" name="min_pesanan">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for=""> Maksimal Pesanan </label>
                        <input type="text" class="form-control" name="max_pesanan">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for=""> Deskripsi </label>
                        <input type="text" class="form-control" name="deskripsi">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for=""> Ulasan </label>
                        <input type="text" class="form-control" name="ulasan">
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary"> Tambahkan </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection