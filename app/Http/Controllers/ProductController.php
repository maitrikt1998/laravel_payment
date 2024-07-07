<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //show all products
    public function productlist()
    {
        $products = product::all();
        return view("products/productlist",compact("products"));
    }

    public function show($id) {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }
    
    public function checkout() {
        // Handle checkout logic here
        return view('products.checkout');
    }
}
