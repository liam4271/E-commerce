<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function show(){
        $data = User::all();
        return view('AdminTab', ['users' => $data]);
    }

    static function checkPassword(String $username){
        $data = User::all();
        foreach($data as $user){
            if($user->username == $username){
                return $user->password;
            }
        }

    }

    function AddUser(Request $req){
        $user = new User();
        $user->username = $req->username;
        $user->email = $req->email;
        $user->first_name = $req->first_name;
        $user->last_name = $req->last_name;
        $user->password = $req->password;
        $user->save();

        return redirect('/admin');
    }
}
