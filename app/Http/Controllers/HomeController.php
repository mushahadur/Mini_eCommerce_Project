<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('website.home.index', [
            'published_product' => Product::where('status', 1)->orderBy('id', 'desc')->take(8)->get()
        ]);
    }
    public function singleProduct(){
        return view('website.product.singleProduct.index', [
            'published_single_product' => Product::where('status', 1)->orderBy('id', 'desc')->take(8)->get()
        ]);
    }
    public function singleProductDetail($id){
        return view('website.product.detail.detail', ['product' => Product::find($id)]);
    }
}
