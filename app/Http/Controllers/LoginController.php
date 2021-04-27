<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class LoginController extends Controller
{
    public function postlogin(Request $request){
       
        $validasiData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5;max:12'
        ]);

        if(Auth::attempt($request->only('email','password'))){
            return redirect('beranda');
        }
        return redirect('');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('');
    }
}
