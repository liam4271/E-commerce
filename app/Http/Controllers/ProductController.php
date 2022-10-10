<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Routing\Route;

class ProductController extends Controller
{
    //

    function show(){
        $data = Product::all();
        return view('AdminTab', ['products' => $data]);
    }

    function addProduct(Request $req){
        $product = new Product;
        $product->name = $req->name;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->category = $req->category;
        $product->save();

        return redirect('/admin');

    }
}
