<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
        $userData = User::where(['email' => $req->email])->first();

        if(!$userData || !Hash::check($req->password,$userData->password))
        {
            return "User Email or Password not match";
        }
        else
        {
            $req->session()->put('userData',$userData);
            return redirect('/');
        }
    }

    function userRegistration(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make( $req->password);

        $user->save();

        return redirect('login');



    }
}
