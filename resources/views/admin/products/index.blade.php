@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Product</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Gambar </th>
                        <th> Harga </th>
                        <th> Nama </th>
                        <th> Kondisi </th>
                        <th> Minimal Pesanan </th>
                        <th> Maksimal Pesanan </th>
                        <th> Deskripsi </th>
                        <th> Ulasan </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <td> {{ $item->id }} </td>
                            
                            <td> 
                                <img src="{{ asset('assets/uploads/products/'.$item->image) }}" class="image-product" alt="gambar" class="w-25">
                             </td>
                            <td> {{ $item->harga }} </td>
                            <td> {{ $item->nama }} </td>
                            <td> {{ $item->kondisi }} </td>
                            <td> {{ $item->min_pesanan }} </td>
                            <td> {{ $item->max_pesanan }} </td>
                            <td> {{ $item->deskripsi }}</td>
                            <td> {{ $item->ulasan }}</td>
                            <td>
                                <a href="{{ url('edit-product/'.$item->id)}}" class="btn btn-primary btn-sm"> Edit </button>
                                <a href="{{ url('delete-product/'.$item->id)}}" class="btn btn-danger btn-sm"> Hapus </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection