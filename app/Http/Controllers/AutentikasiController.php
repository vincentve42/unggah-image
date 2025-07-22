<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutentikasiController extends Controller
{
    public function Register(Request $request)
    {
        $request->validate(['name' => 'required', 'email' => 'required|unique:users','password' => 'min:8', 'agree' => 'required']);

        $new_user = new User;
        $new_user->name = $request->name;
        $new_user->email = $request->email;
        $new_user->profile_url = "stewie.jpg";
        $new_user->password = bcrypt($request->password);
        $new_user->save();
        return redirect('/login');


    }
    public function Login(Request $request)
    {
        // Validasi
        $validasi = User::where('email',$request->email)->first();
        if($validasi->isUsingAnotherLogin == 0)
        {
            $credential = $request->only('email','password');

            if(Auth::attempt($credential))
            {
                $request->session()->regenerate();
                return redirect('/');
            }
            else
            {
                return redirect('/login')->withErrors('Email atau password tidak cocok');
            }
                
        }
        else
        {

        }

    }
}
