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

            $image_count = Auth::user()->Upload->count();
            $album_count = Auth::user()->Album->count();

            
        }
        else
        {
            if($order == 1)
            {
                $user_data = Auth::user();
                $following_count = Auth::user()->Following->count();
                $data_image = Auth::user()->Upload()->orderBy('id','desc')->get();
                
                $follower_count = Follow::where('followed_id', Auth::id())->count();
                
            }
            if($order == 2)
            {
                $user_data = Auth::user();
                $following_count = Auth::user()->Following->count();
                $data_image = Auth::user()->Upload()->orderBy('id','asc')->get();

            
                
                $follower_count = Follow::where('followed_id', Auth::id())->count();
                
            }
            if($order == 3)
            {
                $user_data = Auth::user();
                $following_count = Auth::user()->Following->count();
                $data_image = Auth::user()->Upload()->orderBy('view','desc')->get();

            
                
                $follower_count = Follow::where('followed_id', Auth::id())->count();
                
            }
            if($order == 4)
            {
                $user_data = Auth::user();
                $following_count = Auth::user()->Following->count();
                $data_image = Auth::user()->Upload()->orderBy('name')->get();

            
                
                $follower_count = Follow::where('followed_id', Auth::id())->count();
                
            }
            $image_count = Auth::user()->Upload->count();
            $album_count = Auth::user()->Album->count();
            
        }
        session()->put('page',1);
        $data_album = Auth::user()->Album;
        return view('user/index',compact('user_data','following_count','follower_count','data_image','image_count','album_count','data_album'));
    }
    public function AlbumUi()
    {
        $cek = session()->get('order');
        if(!$cek)
        {
            $user_data = Auth::user();
            $following_count = Auth::user()->Following->count();
            $image_count = Auth::user()->Upload->count();
            $album_count = Auth::user()->Album->count();
            $follower_count = Follow::where('followed_id', Auth::id())->count();
            $data_album = Auth::user()->Album;

        //
        }
        else
        {
            if($cek == 1)
            {
                $data_album = Auth::user()->Album()->orderBy('id','desc');
            }
            if($cek == 2)
            {
                $data_album = Auth::user()->Album()->orderBy('id','asc');
            }
        }
        return view('user/album',compact('user_data','following_count','follower_count','image_count','album_count','data_album'));
    }
}
