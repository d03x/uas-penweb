<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product.index');
    }
    public function tambah(){
        return view('product.tambah');
    }
    public function destroy(Request $request, Product $product) {
        //delete here
    }
}

