<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class CollectionController extends Controller
{
    //
    function show(){
        $data = Collection::all();
        return view('AdminTab', ['collections' => $data]);
    }

    function addCollection(Request $req){
        $category = new Category();
        $category->name = $req->name;
        $category->description = $req->description;
        $category->save();

        return redirect('/admin');
    }
}
