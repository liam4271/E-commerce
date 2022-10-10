<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Token;

class DataController extends Controller
{
    //
    function show(){
        $product = Product::all();
        $category = Category::all();
        $user = User::all();
        $token = Token::all();

        return view('AdminTab', ['products' => $product, 'categories' => $category, 'users' => $user, 'tokens' => $token]);
    }
}
