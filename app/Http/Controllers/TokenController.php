<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Token;

class TokenController extends Controller
{

    function show(){
        $token = Token::all();
        return view('AdminTab', ['tokens' => $token]);
    }

    static function hasAToken($username){
        $token = Token::where('username', $username)->first();
        if($token == null){
            return false;
        }
        else{
            return true;
        }
    }

    //
    static function setToken($username, $token_request){

        if (TokenController::hasAToken($username)){
            Token::where('username', $username)->delete();
        }
        $token = new Token;
        $token->username = $username;
        $token->token = $token_request;
        $token->save();

    }

    static function getUsernameByToken($token_request){
        $token = Token::where('token', $token_request)->first();
        if($token == null){
            return 'invalid';
        }
        else{
            return $token->username;
        }
    }
}
