<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function product()
    {
        $product = product::where('kondisi', 'baik')->get();
        return view('frontend.product', compact('product'));
    }
}
