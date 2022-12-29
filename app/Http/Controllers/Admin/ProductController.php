<?php

namespace App\Http\Controllers\Admin;

use App\Models\product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function add()
    {
        $products = product::all();
        return view('admin.products.add', compact('products'));
    }
   
    //
    public function insert(Request $request)
    {
        $products = new Product();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/', $filename);
            $products->image = $filename;
        }
        $products->id = $request->input('id');
        $products->harga = $request->input('harga');
        $products->nama = $request->input('nama');
        $products->kondisi = $request->input('kondisi');
        $products->min_pesanan = $request->input('min_pesanan');
        $products->max_pesanan = $request->input('max_pesanan');
        $products->deskripsi = $request->input('deskripsi');
        $products->ulasan = $request->input('ulasan');
        $products->save();
        return redirect('products')->with('status', "Produk Berhasil Ditambahkan");
    } 

    public function edit($id)
    {
        $products = Product::find($id);
        return view('admin.products.edit', compact('products'));
    }
    
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $path = 'assets/uploads/products'.$products->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/', $filename);
            $products->image = $filename;
        }
        $products->harga = $request->input('harga');
        $products->nama = $request->input('nama');
        $products->kondisi = $request->input('kondisi');
        $products->min_pesanan = $request->input('min_pesanan');
        $products->max_pesanan = $request->input('max_pesanan');
        $products->deskripsi = $request->input('deskripsi');
        $products->ulasan = $request->input('ulasan');
        $products->save();
        return redirect('products')->with('status',"Produk berhasil di update"); 
    }
    
    public function delete($id)
    { 
        $products = Product::find($id);
        if($products->image)
        {
            $path = 'assets/uploads/products'.$products->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $products->delete();
        return redirect('products')->with('status',"Produk berhasil dihapus!");
    }
}
