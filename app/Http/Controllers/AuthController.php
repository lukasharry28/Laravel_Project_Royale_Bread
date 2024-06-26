<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function ceklogin(request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/Dashboard');
        } else {
            return redirect('/')->with(['alert' => 'Email or password is incorrect']);
        }
    }

    public function ceklogout()
    {
        Auth::logout();
        return redirect("/");
    }
}
