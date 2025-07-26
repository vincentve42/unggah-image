<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Queue\Console\RetryBatchCommand;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function SetOrder($order)
    {
        session()->put("order", $order);
        return redirect('/akun-saya');
    }
    public function AccountUi()
    {
        $order = session()->get('order');
        if(!$order)
        {
            $user_data = Auth::user();
            $following_count = Auth::user()->Following->count();
            $data_image = Auth::user()->Upload;
            
            $follower_count = Follow::where('followed_id', Auth::id())->count();
            return view('user/index',compact('user_data','following_count','follower_count','data_image'));
        }
        else
        {
            if($order == 1)
            {
                $user_data = Auth::user();
                $following_count = Auth::user()->Following->count();
                $data_image = Auth::user()->Upload()->orderBy('id','desc')->get();

                
                
                $follower_count = Follow::where('followed_id', Auth::id())->count();
                return view('user/index',compact('user_data','following_count','follower_count','data_image'));
            }
            if($order == 2)
            {
                $user_data = Auth::user();
                $following_count = Auth::user()->Following->count();
                $data_image = Auth::user()->Upload()->orderBy('id','asc')->get();

            
                
                $follower_count = Follow::where('followed_id', Auth::id())->count();
                return view('user/index',compact('user_data','following_count','follower_count','data_image'));
            }
        }
    }
    public function AlbumUi()
    {
        $user_data = Auth::user();
        $following_count = Auth::user()->Following->count();
        $follower_count = Follow::where('followed_id', Auth::id())->count();
        return view('user/album',compact('user_data','following_count','follower_count'));
    }
}
