<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function AccountUi()
    {
        $user_data = Auth::user();
        $following_count = Auth::user()->Following->count();
        $follower_count = Follow::where('followed_id', Auth::id())->count();
        return view('user/index',compact('user_data','following_count','follower_count'));
    }
    public function AlbumUi()
    {
        $user_data = Auth::user();
        $following_count = Auth::user()->Following->count();
        $follower_count = Follow::where('followed_id', Auth::id())->count();
        return view('user/album',compact('user_data','following_count','follower_count'));
    }
}
