<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TokenController;

class LoginController extends Controller
{
    //
    function connect(Request $req){

        if($req->password == UserController::checkPassword($req->username)){
            $cookie_name = "connected";
            // generate a token and stock it in $cookie_value
            $token = openssl_random_pseudo_bytes(16);

            // Convert the binary data into hexadecimal representation.
            $token = bin2hex($token);
            $cookie_value = $token;
            setcookie($cookie_name, $cookie_value);
            TokenController::setToken($req->username, $cookie_value);
            return redirect('/admin');
        }

        else{
            return redirect('/admin');
        }

    }

    function disconect(Request $req){
        $cookie_name = "connected";
        setcookie($cookie_name, null, -1, '/');
        return redirect('/admin');
    }

}
