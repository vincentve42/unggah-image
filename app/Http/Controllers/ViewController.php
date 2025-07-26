<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Auth;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function ViewImage($url)
    {
        $image_data = Upload::where("url", $url)->first();
        $data_album = Auth::user()->album;
        return view('view-image',compact('image_data','data_album'));
    }
}
