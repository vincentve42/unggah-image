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
        return redirect()->back();
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
            session()->put('order', $order);
            $image_count = Auth::user()->Upload->count();
            $album_count = Auth::user()->Album->count();
            
        }
        session()->put('page',1);
        $data_album = Auth::user()->Album;
        return view('user/index',compact('user_data','following_count','follower_count','data_image','image_count','album_count','data_album'));
    }
    public function AlbumUi()
    {
        $user_data = Auth::user();
        $cekpage = session()->get('page');
        if(!$cekpage)
        {
            session()->put('page',2);
        }
        else if($cekpage != 2)
        {
            session()->put('page',2);
            session()->remove('order');
        }
        $cek = session()->get('order');
        if(!$cek)
        {
            session()->put('order',1);
            $following_count = Auth::user()->Following->count();
            $image_count = Auth::user()->Upload->count();
            $album_count = Auth::user()->Album->count();
            $follower_count = Follow::where('followed_id', Auth::id())->count();
            $data_album = Auth::user()->Album;
            return view('user/album',compact('user_data','following_count','follower_count','image_count','album_count','data_album'));

        //
        }
        else
        {
            $following_count = Auth::user()->Following->count();
            $image_count = Auth::user()->Upload->count();
            $album_count = Auth::user()->Album->count();
        
            $follower_count = Follow::where('followed_id', Auth::id())->count();
            if($cek == 1)
            {
                $data_album = Auth::user()->Album()->orderBy('id','desc')->get();
            }
            if($cek == 2)
            {
                $data_album = Auth::user()->Album()->orderBy('id','asc')->get();
            }
            if($cek == 4)
            {
                $data_album = Auth::user()->Album()->orderBy('nama')->get();
            }
           
            return view('user/album',compact('user_data','following_count','follower_count','image_count','album_count','data_album'));
        }
        
    }
    public function FollowedUi()
    {
        $cekpage = session()->get('page');
        $order = session()->get('order');
        if(!$cekpage)
        {
            session()->put('page',3);
        }
        else if($cekpage != 3)
        {
            session()->put('page',3);
            session()->remove('order');
        }
        
        if(!$order)
        {
            $user_data = Auth::user();
            $follower_count = Follow::where('followed_id', Auth::id())->count();
            $following_count = Auth::user()->Following->count();
            $image_count = Auth::user()->Upload->count();
            $album_count = Auth::user()->Album->count();
            $data_album = Auth::user()->Album;
            $data_following = Auth::user()->Following;

            return view('user/followed',compact('user_data','following_count','follower_count','image_count','album_count','data_album','data_following'));
        }
        else
        {
            $user_data = Auth::user();
            $follower_count = Follow::where('followed_id', Auth::id())->count();
            $following_count = Auth::user()->Following->count();
            $image_count = Auth::user()->Upload->count();
            $album_count = Auth::user()->Album->count();
            $data_album = Auth::user()->Album;
            if($order == 1)
            {
                $data_following = Auth::user()->Following()->orderBy('id','desc')->get();
            }
            if($order == 2)
            {
                $data_following = Auth::user()->Following()->orderBy('id','asc')->get();
            }
            return view('user/followed',compact('user_data','following_count','follower_count','image_count','album_count','data_album','data_following'));
            
        }
       
        
    }
     public function FollowerUi()
    {
        $cekpage = session()->get('page');
        $order = session()->get('order');
        if(!$cekpage)
        {
            session()->put('page',4);
        }
        else if($cekpage != 4)
        {
            session()->put('page',4);
            session()->remove('order');
        }
        if(!$order)
        {
            $user_data = Auth::user();
            $follower_count = Follow::where('followed_id', Auth::id())->count();
            $following_count = Auth::user()->Following->count();
            $image_count = Auth::user()->Upload->count();
            $album_count = Auth::user()->Album->count();
            $data_album = Auth::user()->Album;
            $data_following = Follow::where('followed_id',Auth::id())->get();

            return view('user/followed',compact('user_data','following_count','follower_count','image_count','album_count','data_album','data_following'));
        }
        else
        {
            if($order == 1)
            {
                 $data_following = Follow::where('followed_id',Auth::id())->orderBy('id','desc')->get();
            }
            if($order == 2)
            {
                 $data_following = Follow::where('followed_id',Auth::id())->orderBy('id','desc')->get();
            }
            return view('user/follower',compact('user_data','following_count','follower_count','image_count','album_count','data_album','data_following'));
        }
        
    }
}
