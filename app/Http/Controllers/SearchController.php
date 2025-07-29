<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function Search(Request $request)
    {
        if($request->pencarian == 1)
        {
            $data_image = Auth::user()->Upload()->where('name', 'LIKE',"%$request->search%")->get();
            $user_data = Auth::user();
            $following_count = Auth::user()->Following->count();
            $image_count = Auth::user()->Upload->count();
            $album_count = Auth::user()->Album->count();
            $data_album = Auth::user()->Album;
            
            $follower_count = Follow::where('followed_id', Auth::id())->count();
            return view('user/index',compact('user_data','following_count','follower_count','data_image','data_album','album_count','image_count'));
           
        }
         if($request->pencarian == 2)
        {
            $album_tampil = Auth::user()->Upload()->where('nama', 'LIKE',"%$request->search%")->get();
            $user_data = Auth::user();
            $following_count = Auth::user()->Following->count();
            $image_count = Auth::user()->Upload->count();
            $album_count = Auth::user()->Album->count();
            $data_album = Auth::user()->Album;
            
            $follower_count = Follow::where('followed_id', Auth::id())->count();
            return view('user/index',compact('user_data','following_count','follower_count','data_image','data_album','album_count','image_count'));
           
        }
        
    }
}
