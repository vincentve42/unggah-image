<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function AccountUi()
    {
        $user_data = Auth::user();
        return view('user/index',compact('user_data'));
    }
}
