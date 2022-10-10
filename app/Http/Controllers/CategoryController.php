<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    function show(){
        $data = Category::all();
        return view('AdminTab', ['categories' => $data]);
    }

    function addCategory(Request $req){
        $category = new Category();
        $category->name = $req->name;
        $category->description = $req->description;
        $category->save();

        return redirect('/admin');
    }
}
