<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    function login(Request $req){
        
        $user= User::where(['email'=>$req->email])->frist();
        return $user->password;
        if(!$user ||Hash::check($req->password ,$user->password)) {
            return "Username or password not matched" ;
        }
        else{
            $req->session()->put('user' ,$user);
            return redirect('/');
        }
    
    }
}
