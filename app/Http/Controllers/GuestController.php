<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function HomeUi()
    {
        if(!Auth::user())
        {
            return view('index');
        }
        else
        {
            $data_album = Auth::user()->album;
            return view('index',compact('data_album'));
        }
        
    }
    public function RegisterUI()
    {
        return view('register');
    }
    public function LoginUI()
    {
        return view('login');
    }

}
