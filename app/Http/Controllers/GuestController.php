<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function HomeUi()
    {
        return view('index');
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
