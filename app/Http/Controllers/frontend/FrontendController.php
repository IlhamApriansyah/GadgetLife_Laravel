<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use App\Models\product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $feature_products = product::where('kondisi', 'baik')->get();
        return view('frontend.index', compact('feature_products'));
    }

    public function product()
    {
        $product = product::where('kondisi', 'baik')->get();
        return view('frontend.product', compact('product'));
    }

    public function viewproduct($nama){
        if(product::where('nama', $nama)->exists())
        {
            $product = product::where('nama', $nama)->first();
            $products = product::where('id', $product->id)->where('kondisi','baik')->get();
            return view('frontend.products.index', compact('products','product'));
        }else{
            return redirect('/');
        }
    }

    public function productview($prod_nama)
    {
            if(product::where('nama', $prod_nama)->exists())
            {
                $products = product::where('nama', $prod_nama)->first();
                return view('frontend.products.view', compact('products'));
            }
            else{
                return redirect('/');
            }
        }   
    }
