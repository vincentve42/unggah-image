<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Follow;
use App\Models\Upload;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function ViewImage($url)
    {
        $image_data = Upload::where("url", $url)->first();
        $data_album = Auth::user()->album;
        if($image_data->user_id > 0 )
        {
            $image_data->view += 1;
            $image_data->save();
        }
        return view('view-image',compact('image_data','data_album'));
    }
    public function ViewUser($url)
    {
        $user_data = User::where('view_url',$url)->get();
        $order = session()->get('order');
        if(!$order)
        {
            $user_data = User::where('view_url',$url)->first();
            $following_count = $user_data->Following->count();
            $data_image = $user_data->Upload;
            
            $follower_count = Follow::where('followed_id', $user_data->id)->count();

            $image_count = $user_data->Upload->count();
            $album_count = $user_data->Album->count();

            
        }
        else
        {
            if($order == 1)
            {
                $user_data = User::where('view_url',$url)->first();
                $following_count = $user_data->Following->count();
                $data_image = $user_data->Upload()->orderBy('id','desc')->where('private',0)->get();
                
                $follower_count = Follow::where('followed_id', $user_data->id)->count();
                
            }
            if($order == 2)
            {
                $user_data = User::where('view_url',$url)->first();
                $following_count = $user_data->Following->count();
                $data_image = $user_data->Upload()->orderBy('id','asc')->where('private',0)->get();

            
                
                $follower_count = Follow::where('followed_id', $user_data->id)->count();
                
            }
            if($order == 3)
            {
                $user_data = User::where('view_url',$url)->first();
                $following_count = $user_data->Following->count();
                $data_image = $user_data->Upload()->orderBy('view','desc')->where('private',0)->get();

            
                
                $follower_count = Follow::where('followed_id', $user_data->id)->count();
                
            }
            if($order == 4)
            {
                $user_data = User::where('view_url',$url)->first();
                $following_count = $user_data->Following->count();
                $data_image = $user_data->Upload()->orderBy('name')->where('private',0)->get();;

            
                
                $follower_count = Follow::where('followed_id', $user_data->id)->count();
                
            }
            session()->put('order', $order);
            $image_count = $user_data->Upload->count();
            $album_count = $user_data->Album->count();
            
        }
        session()->put('page',1);
        
        $data_album = Auth::user()->Album;
        return view('user-page/index',compact('user_data','following_count','follower_count','data_image','image_count','album_count','data_album'));
    }
    public function ViewUserAlbum($url)
    {
        $user_data = User::where('view_url',$url)->first();
        $following_count = $user_data->Following->count();
        $follower_count = Follow::where('followed_id', $user_data->id)->count();
        $image_count = $user_data->Upload->count();
        $album_count = $user_data->Album->count();
        $order = session()->get('order');
        if(!$order)
        {
            $album_user = $user_data->Album;
        }
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
        else
        {
            if($order == 1)
            {
                $album_user = $user_data->Album()->orderBy('id','desc')->where('izin',0)->get();    
            }
            if($order == 2)
            {
                $album_user = $user_data->Album()->orderBy('id','asc')->where('izin',0)->get();    
            }
            if($order == 3)
            {
                
                $album_user = $user_data->Album()->orderBy('view','desc')->where('izin',0)->get();    
            }
            if($order == 4)
            {
                $album_user = $user_data->Album()->orderBy('nama')->where('izin',0)->get();  
                
            }
            session()->put('order', $order);
            $image_count = $user_data->Upload->count();
            $album_count = $user_data->Album->count();
            
        }
        session()->put('page',2);
        
        $data_album = Auth::user()->Album;
        return view('user-page/album',compact('user_data','album_user','following_count','follower_count','image_count','album_count','data_album'));
    }
    public function ViewUserFollowing($url)
    {
        
        $user_data = User::where('view_url',$url)->first();
        
        $following_count = $user_data->Following->count();
        $follower_count = Follow::where('followed_id', $user_data->id)->count();
        $image_count = $user_data->Upload->count();
        $album_count = $user_data->Album->count();
        $order = session()->get('order');
        if(!$order)
        {
            $data_following = $user_data->Following()->orderBy('id','desc')->get();    
            $album_user = $user_data->Album;
        }
        $cekpage = session()->get('page');
        if(!$cekpage)
        {
            session()->put('page',3);
        }
        else if($cekpage != 3)
        {
            session()->put('page',3);
            session()->remove('order');
        }
        else
        {
            if($order == 1)
            {
                $data_following = $user_data->Following()->orderBy('id','desc')->get();    
            }
            if($order == 2)
            {
                $data_following = $user_data->Following()->orderBy('id','asc')->get();    
            }
           
            session()->put('order', $order);
            $image_count = $user_data->Upload->count();
            $album_count = $user_data->Album->count();
            
        }
        session()->put('page',3);
        
        $data_album = Auth::user()->Album;
        return view('user-page/follow',compact('data_following','user_data','following_count','follower_count','image_count','album_count','data_album'));
    }
    public function ViewUserFollower($url)
    {
        
        $user_data = User::where('view_url',$url)->first();
        
        $following_count = $user_data->Following->count();
        $follower_count = Follow::where('followed_id', $user_data->id)->count();
        $image_count = $user_data->Upload->count();
        $album_count = $user_data->Album->count();
        $order = session()->get('order');
        if(!$order)
        {
            $data_following = Follow::where('followed_id', $user_data->id)->get();
            $album_user = $user_data->Album;
        }
        $cekpage = session()->get('page');
        if(!$cekpage)
        {
            session()->put('page',4);
        }
        else if($cekpage != 4)
        {
            session()->put('page',4);
            session()->remove('order');
        }
        else
        {
            if($order == 1)
            {
                $data_following =  Follow::where('followed_id', $user_data->id)->orderBy('id','desc')->get();    
            }
            if($order == 2)
            {
                $data_following =  Follow::where('followed_id', $user_data->id)->orderBy('id','asc')->get();    
            }
           
            session()->put('order', $order);
            $image_count = $user_data->Upload->count();
            $album_count = $user_data->Album->count();
            
        }
        session()->put('page',4);
        
        $data_album = Auth::user()->Album;
        return view('user-page/follower',compact('data_following','user_data','following_count','follower_count','image_count','album_count','data_album'));
    }
    

    
}
